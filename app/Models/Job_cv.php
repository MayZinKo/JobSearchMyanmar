<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job_cv extends Model
{
    use HasFactory;
    protected $table = 'job_cv';

    public function job()
    {
        return $this->belongsTo('App\Model\Job','job_id');
    }       
    public function cv()
    {
        return $this->belongsTo('App\Model\Cv','cv_id');
    }
}
