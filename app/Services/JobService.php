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
	function getall()
	{
		return Job::with('city','company','job_type')->withCount('job_cv')->get();
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
		
		$this->job->job_title=htmlspecialchars($request->title);
		$this->job->job_requirement=htmlspecialchars($request->requirement);
	       $this->job->privilege =htmlspecialchars($request->privilege);
	       $this->job->address=htmlspecialchars($request->address);
	      
	       $this->job->category_id=$request->category;
	       $this->job->company_id=$request->company;
	       $this->job->job_type_id =$request->job_type;
	       $this->job->city_id =$request->city;

	       $this->job->save();
	       return $request->job_id;
	}
	function save($request)
	{
		$this->job->job_title=htmlspecialchars($request->title);
        	$this->job->job_requirement=htmlspecialchars($request->requirement);
	       $this->job->privilege =htmlspecialchars($request->privilege);
	       $this->job->address=htmlspecialchars($request->address);

	       $this->job->category_id=$request->category;
	       $this->job->company_id=$request->company;
	       $this->job->job_type_id =$request->job_type;
	       $this->job->city_id =$request->city;

	       $this->job->save();
	}
	function search($request)
	{
		$check =  array();

		if($request->job_title != null )
		{ 
        		$check[] = ['job.job_title', 'LIKE', '%' . $request->job_title . '%'];
         
      		}
	      	if($request->category != null )
	      	{ 
	        	$check[] = ['job.category_id', '=',$request->category];
	      	}
	      	if($request->city != null )
	      	{ 
	        	$check[] = ['job.city_id', '=',$request->city];
	      	}
      	

      		return Job::join('city', 'city.id', '=', 'job.city_id')
              ->join('country', 'country.id', '=', 'city.country_id')
		->join('category', 'category.id', '=', 'job.category_id')
		->join('company', 'company.id', '=', 'job.company_id')
		->join('job_type', 'job_type.id', '=', 'job.job_type_id')
		->where($check)
		->paginate(3);	
	}

	function delete($job_id)
	{
		$job = $this->job::find($job_id);
		 
		 if ($job) {
		 	$job->delete();
		 }
	}
}
 ?>





