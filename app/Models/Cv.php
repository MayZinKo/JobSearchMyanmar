<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $table = 'cv';
    public function job_cv()
    {
        return $this->hasMany('App/Model/Job_cv');
    }
}
