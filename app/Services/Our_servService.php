<?php 
namespace App\Services;
use App\Models\Our_servs;
use Auth;
class Our_servService 
{
	
	function get_all($start,$end)
	{
		return Our_servs::whereBetween('id', [$start, $end])->get();
	}
} ?>