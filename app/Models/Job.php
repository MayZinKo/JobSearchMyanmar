<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job';

    public function job_cv()
    {
        return $this->hasMany(Job_cv::class, 'job_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }       
    public function job_type()
    {
        return $this->belongsTo(Job_type::class,'job_type_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
    public function city()
    {
        return $this->belongsTo(City::class,'city_id');
    }
}
