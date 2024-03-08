<?php 
namespace App\Services;
use App\Models\Job_cv;
use Auth;
class JobCvService 
{
	
	function get_all($start,$end)
	{
		return Cv::whereBetween('id', [$start, $end])->get();
	}

	function check_email($email)
	{

	}

	function save($request)
	{
		$job_cv=new Job_cv();   
        $job_cv->job_id=$request['job_id'];
        $job_cv->cv_id=$request['cv_id'];
        $job_cv->save();
	}
} ?>