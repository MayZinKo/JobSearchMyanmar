<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = 'company';

    public function city()
    {
        return $this->belongsTo('App/Model/City','city_id');
    }
    public function job()
    {
        return $this->hasMany('App/Model/Job');
    }
}
