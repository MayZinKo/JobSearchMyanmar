<?php 
namespace App\Services;
use App\Models\Job_type;

use Auth;
/**
  * 
  */
 class JobtypeService
 {
 	function get_all()
 	{
 		return Job_type::get();
 	}
 } ?>