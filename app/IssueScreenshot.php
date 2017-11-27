<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueScreenshot extends Model
{
    //Esto es para recoger los campos del formulario que se meteran en la bd
    protected $fillable = ['issue_id', 'filename'];

    public function issue()
    {
        //relación de las screen con la incidencia
        return $this->belongsTo('App\Issue');
    }
}
