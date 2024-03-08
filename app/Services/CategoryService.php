<?php 
namespace App\Services;
use App\Models\Category;
use Auth;
/**
 * 
 */
class CategoryService 
{
	function get_part($start,$end)
	{
		return Category::whereBetween('id', [$start, $end])->get();
	}
	function get_all()
	{
		return Category::get();
	}
}
 ?>