<?php 
namespace App\Services;
use DB;
use App\Models\Job;
use Auth;

/**
 * 
 */
class JobService 
{

	function __construct()
	{
		$this->job=new Job();
    	
	}
	function get_latest($limit)
	{
		return Job::latest()->limit($limit)->get();
	}
	function get_all()
	{
		return Job::with('city','company','job_type')->paginate(3);
	}
	function get_one($id)
	{
		return Job::
               join('city', 'city.id', '=', 'job.city_id')
               ->join('country', 'country.id', '=', 'city.country_id')
			   ->join('category', 'category.id', '=', 'job.category_id')
			   ->join('company', 'company.id', '=', 'job.company_id')
			   ->join('job_type', 'job_type.id', '=', 'job.job_type_id')
			   ->where('job.id',$id)
			   ->first();	
	}
	function distinct_category()
	{
		return Job::select('category_id', DB::raw('count(*) as count'))
			    ->groupBy('category_id')
			    ->get();
	}
	function get($id)
	{
		return Job::with('city','category','company','job_type')->where('id',$id)->first();
	}
	function update($request)
	{
		$this->job=$this->job::find($request->job_id);
		
		$this->job->job_title=$request->job_title;
		$this->job->job_requirement=htmlspecialchars($request->job_req);
        $this->job->job_description =htmlspecialchars($request->job_des);
        $this->job->privilege=htmlspecialchars($request->job_pri);
        $this->job->address=$request->job_add;
        $this->job->category_id=$request->job_cat;
        // $this->job->company_id=1;
        $this->job->job_type_id =$request->job_type;
        $this->job->city_id =$request->city;
        $this->job->exp_date =$request->exp_date;
        $this->job->save();
	}
	function save($request)
	{
	
		$job=new Job();
        $job->job_title=$request->job_title;
        $job->job_description=htmlspecialchars($request->job_des);
        $job->job_requirement=htmlspecialchars($request->job_req);
        $job->privilege=htmlspecialchars($request->job_pri);
        $job->address=$request->job_add;
        $job->category_id=$request->job_cat;
        $job->company_id=1;
        $job->job_type_id =$request->job_type;
        $job->city_id =$request->city;
        $job->exp_date =$request->exp_date;
        $result=$job->save();
        return $result;
	}
	function search($request)
	{
		$check =  array();

		if($request->job_title != null ){ 
        $check[] = ['job.job_title', 'LIKE', '%' . $request->job_title . '%'];
         
      	}
      	if($request->category != null ){ 
        $check[] = ['job.category_id', '=',$request->category];
      	}
      	if($request->city != null ){ 
        $check[] = ['job.city_id', '=',$request->city];
      	}
      	

      	return Job::
               join('city', 'city.id', '=', 'job.city_id')
               ->join('country', 'country.id', '=', 'city.country_id')
			   ->join('category', 'category.id', '=', 'job.category_id')
			   ->join('company', 'company.id', '=', 'job.company_id')
			   ->join('job_type', 'job_type.id', '=', 'job.job_type_id')
			   ->where($check)
			   ->paginate(3);	

	}
}
 ?>