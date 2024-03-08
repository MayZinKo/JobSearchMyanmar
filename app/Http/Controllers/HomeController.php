<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Services\JobService;
use App\Services\Our_servService;
use App\Services\CityService;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->CategoryService=new CategoryService();
        $this->JobService=new JobService();
        $this->Our_servService=new Our_servService();
        $this->CityService=new CityService();
    }
    public function index()
    {

        $data['job'] = $this->JobService->get_latest(3);
        $data['cities'] = $this->CityService->get_all();
        $data['categories'] = $this->CategoryService->get_all();


        $data['cat_1'] = $this->CategoryService->get_part(1,7);
        $data['cat_2'] = $this->CategoryService->get_part(8,15);
        $data['cat_3'] = $this->CategoryService->get_part(16,23);
        $data['cat_4'] = $this->CategoryService->get_part(24,30);


        $data['service_1'] = $this->Our_servService->get_all(1,3);
        $data['service_2'] = $this->Our_servService->get_all(4,6);
        $data['service_3'] = $this->Our_servService->get_all(7,9);
    
        return view('home', $data);
    }
}
