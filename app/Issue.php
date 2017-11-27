<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    //Esto es para recoger los campos del formulario que se meteran en la bd
    protected $fillable = ['name', 'institution', 'email', 'os', 'browser', 'app', 'issue_info'];

}
