<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['name', 'email', 'os', 'browser', 'app', 'issue_info'];

}
