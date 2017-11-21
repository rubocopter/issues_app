<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use App\Issue;
use App\IssueScreenshot;

use Redmine;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('upload_form');
    }

    public function uploadSubmit(UploadRequest $request)
    {
        $issue = Issue::create($request->all());

        if(count($request->screenshots) > 0 ){

            foreach ($request->screenshots as $screenshot) {

                $filename = $screenshot->store('screenshots');
                IssueScreenshot::create([
                    'issue_id' => $issue->id,
                    'filename' => $filename
                ]);
            }
        }

        $client = new Redmine\Client('http://redmine.domain.es','support', 'web_support');

        $client->issue->create([
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
        $client->issue->all([
            'limit' => 1000
        ]);

        return view('success');
    }
}
