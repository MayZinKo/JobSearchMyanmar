<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CityService;
use App\Services\CategoryService;
use App\Services\JobtypeService;
use App\Services\JobService;
use App\Services\CompanyService;
use App\Services\JobCvService;
use Illuminate\Support\Facades\Validator;

class JobController extends Controller
{
    protected $JobService;

    public function __construct()
    {
        $this->CityService=new CityService();
        $this->CategoryService=new CategoryService();
        $this->JobtypeService=new JobtypeService();
        $this->JobService=new JobService();
        $this->CompanyService=new CompanyService();
        $this->JobCvService=new JobCvService();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['cities']=$this->CityService->get_all();
        $data['categories']=$this->CategoryService->get_all();        
        $data['input'] = session()->has('input') ? session('input') : null;
        $data['messages'] = session()->has('messages') ? session('messages') : null;
       
        if (isset($data['messages'])) {
            $data['jobs'] = [];
        }
        else{
            $data['jobs'] = session()->has('jobs') ? session('jobs') : $this->JobService->get_all();
        }
        
        return view('job_list')->with($data);
    }

       /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data['distinct_category'] = $this->JobService->distinct_category();
        $data['job']=$this->JobService->get($id);
        $data['jobs'] = $this->JobService->get_latest(3);
        $data['job_type'] = $this->JobtypeService->get_all(); 
        return view('job_detail')->with($data);
    }

    public function search(Request $request)
    {
        $validator = Validator::make($request->all(),[
             'job_title' => 'nullable|regex:/^[^"\;]+$/',
             'category' => 'nullable|numeric|exists:job,category_id',
             'city' => 'nullable|numeric|exists:job,city_id'
        ]);
        $data['input'] = $request->all();
        
        if ($validator->fails()) 
        {
            $data['messages'] = $validator->messages();
        }
        else
        {
            $data['jobs'] = $this->JobService->search($request);
        }
        return redirect('job')->with($data);    
    }

    public function list()
    {
        $data['jobs'] = $this->JobService->getall();
        return view('admin_joblist')->with($data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['city']=$this->CityService->get_all();
        $data['cat']=$this->CategoryService->get_all();
        $data['job_type']=$this->JobtypeService->get_all();
        $data['comp']=$this->CompanyService->get_all();
        return view('job_create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
             'title' => 'required',
             'requirement' => 'required',
             'privilege' => 'required',
             'address' => 'required',
             'category' => 'required|numeric',
             'company' => 'required|numeric',
             'city' => 'required|numeric',
             'job_type' => 'required|numeric',
        ]);
       
        if ($validator->fails()) 
        {
            $data['messages'] = $validator->messages();
        }
        else
        {
            $this->JobService->save($request);
        }
        // return $this->list();
        return redirect('joblist');
        
    }

 

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['city']=$this->CityService->get_all();
        $data['cat']=$this->CategoryService->get_all();
        $data['job_type']=$this->JobtypeService->get_all();
        $data['comp']=$this->CompanyService->get_all();
        $data['job']=$this->JobService->get($id);
        $data['errors'] = session()->has('messages') ? session('messages') : null;
        return view('job_update')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
             'title' => 'required',
             'requirement' => 'required',
             'privilege' => 'required',
             'address' => 'required',
             'category' => 'required|numeric',
             'company' => 'required|numeric',
             'city' => 'required|numeric',
             'job_type' => 'required|numeric',
        ]);
       
        if ($validator->fails()) 
        {
            $data['messages'] = $validator->messages();
            $data['job_id'] = $request->job_id;
        }
        else
        {
            $data['job_id'] = $this->JobService->update($request);
        }

        return redirect(url('job_edit/' . $data['job_id']));   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //dd(request()->all());
        $job_id = $request->job_id;
        $this->JobCvService->delete($job_id);
        // var_dump($job_cv);
    }
    public function destroy_($job_id)
    {
     
        $this->JobCvService->delete($job_id);
        $this->JobService->delete($job_id);
        return redirect('joblist');

    }
}








