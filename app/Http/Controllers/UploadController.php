<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Issue;
use App\IssueScreenshot;

use Illuminate\Support\Facades\Storage;

use Redmine;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }

    public function uploadSubmit(UploadRequest $request)
    {

        //Conexión Redmine
        $client = new Redmine\Client('http://redmine.clinbioinfosspa.es','support', 'web_support');

        //recoger los datos y crear en la bd
        $issue = Issue::create($request->all());

        //Crear la petición en redmine
        $response = $client->issue->create([
            'project_id'  => 'web_support',
            'tracker_id'  => 3 ,
            'subject'     => $issue->app.'_'.$issue->id ,
            'description' => ' *Name:* '.$issue->name.
                '
                *Institution:* '.$issue->institution.
                '
                *Email:* '.$issue->email.
                '
                *OS:* '.$issue->os.
                '
                *Browser:* '.$issue->browser.
                '
                *Application:* '.$issue->app.
                '
                *Issue info:* '.$issue->issue_info,
        ]);

        //Comprobar si hay screens en el formulario
        if(count($request->screenshots) > 0 ){

            foreach ($request->screenshots as $screenshot) {

                //guardar los screenshots en la carpeta screenshot en laravel
                $path = $screenshot->store('screenshots');

                //cargar el fichero
                $fichero = $client->attachment->upload(Storage::get($path));

                //extraer los datos
                $parseo =  json_decode($fichero, true);

                //agregar el adjunto a la issue con el id
                $client->issue->attach($response->id, [
                    'token' => $parseo['upload']['token'],
                    'filename' => basename($path),
                    'content_type' => 'image/jpeg'
                ]);

                //crear en la bd en la tabla de screenshots con su referencia al id issue
                IssueScreenshot::create([
                    'issue_id' => $issue->id,
                    'filename' => $path
                ]);
            }
        }

        return view('success');
    }
}
