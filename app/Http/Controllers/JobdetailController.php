<?php

namespace App\Http\Controllers;
use DB;
use App\Services\JobService;
use App\Services\JobtypeService;
use Illuminate\Http\Request;

class JobdetailController extends Controller
{
    public function __construct()
    {
        $this->JobService=new JobService();
        $this->JobtypeService=new JobtypeService();
    }
    public function index($id)
    {
        $data['job'] = $this->JobService->get_one($id);
        $data['latest_jobs'] = $this->JobService->get_latest(3);
        $data['distinct_category'] = $this->JobService->distinct_category();
        $data['job_type'] = $this->JobtypeService->get_all();
        
        return view('job_detail',$data);
    }
}
