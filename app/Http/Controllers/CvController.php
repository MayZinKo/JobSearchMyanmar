<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Services\CvService;
use App\Services\JobCvService;
use Illuminate\Support\Facades\Validator;

class CvController extends Controller
{
    public function __construct()
    {
        $this->CvService=new CvService();
        $this->JobCvService=new JobCvService();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $path = Storage::delete('public/cd5kmaperoSL5BZvRPXEEHKIbHvoi0v0KYJutjvV.pdf');
        dd($path);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $email_check = Validator::make($request->all(),[
             'email' => 'required|email|exists:cv,worker_email',
             'phone' => 'required|exists:cv,worker_phone',
        ]);

        if ($email_check->fails()) 
        {
            $job_cv['cv_id'] = $this->CvService->check_email($request->email);
            $job_cv['job_id'] = $request->job_id;
            $this->JobCvService->save($job_cv);
        }
        else
        {
            $path = $request->file('cv_file')->store('public');
            $request->merge(['cv_number' => $path]);
            $job_cv['job_id'] = $request->job_id;
            $job_cv['cv_id'] = $this->CvService->save($request);
            $this->JobCvService->save($job_cv);
        }
        return redirect(url('detail/' . $request->job_id));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
