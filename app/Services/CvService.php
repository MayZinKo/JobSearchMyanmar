<?php 
namespace App\Services;
use App\Models\Cv;
use Auth;
class CvService 
{
	
	function get_all($start,$end)
	{
		return Cv::whereBetween('id', [$start, $end])->get();
	}

	function check_email($email)
	{
		return Cv::where('worker_email',$email)->value('id');
	}

	function save($request)
	{
		$cv=new Cv();   
        $cv->worker_name=htmlspecialchars($request->name);
        $cv->worker_phone=htmlspecialchars($request->phone);
        $cv->worker_email=htmlspecialchars($request->email);
        $cv->cv_number=$request->cv_number;
        $cv->save();
        return $cv->id;
	}
} ?>