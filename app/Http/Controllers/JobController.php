<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CityService;
use App\Services\CategoryService;
use App\Services\JobtypeService;
use App\Services\JobService;
use App\Services\CompanyService;
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
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['city']=$this->CityService->get_all();
        $data['cat']=$this->CategoryService->get_all();
        $data['job_type']=$this->JobtypeService->get_all();
        return view('job_create')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->JobService->save($request);
        return $this->index();
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

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['city']=$this->CityService->get_all();
        $data['cat']=$this->CategoryService->get_all();
        $data['job_type']=$this->JobtypeService->get_all();
        $data['job']=$this->JobService->get($id);
       // dd($data['job']);
        return view('job_update')->with($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->JobService->update($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


}








