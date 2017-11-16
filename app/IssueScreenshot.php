<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IssueScreenshot extends Model
{
    protected $fillable = ['issue_id', 'filename'];

    public function issue()
    {
        return $this->belongsTo('App\Issue');
    }
}
