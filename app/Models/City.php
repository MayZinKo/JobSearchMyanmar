<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $table = 'city';

    public function job()
    {
        return $this->hasMany('App/Model/Job');
    }
    public function company()
    {
        return $this->hasMany('App/Model/Company');
    }
    public function country()
    {
        return $this->belongsto('App/Model/Country','country_id');
    }
   
}
