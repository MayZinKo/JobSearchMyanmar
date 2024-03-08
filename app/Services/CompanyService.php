<?php 
namespace App\Services;
use App\Models\Company;
use App\Models\Job;
use Auth;
class CompanyService
{
	function __construct()
	{
		$this->job=new Job();
		$this->company=new Company();
	}
	function get($alias)	
	{
		return Company::where('alias',$alias)->first();
	}
	function similar_companies($company_type_id)	
	{
		return Company::where('company_type_id',$company_type_id)->get();
	}

} ?>