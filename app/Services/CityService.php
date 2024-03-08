<?php 
namespace App\Services;
use App\Models\City;
use App\Models\Country;
use Auth;
/**
 * 
 */
class CityService
{
	function get_all()
	{
		return City::get();
	}
} ?>