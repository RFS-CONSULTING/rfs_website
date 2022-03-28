<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($job_id)
    {
        //
        return view('jobs.create',['job_id'=>$job_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $cvPath = $request->file('cv')->store('public/jobs'.$request->nom.'/');
        $motivationPath = $request->file('motivation')->store('public/jobs'.$request->nom.'/');
        $job_id = $request->job_id;

        $form = Job::create([
            "nom" => $request->nom,
            "postnom" => $request->postnom,
            "prenom" => $request->prenom,
            "telephone" => $request->phone,
            "email" => $request->email,
            "cv_path" => $cvPath,
            "motivation_path" => $motivationPath,
            "jobsoffers" => $job_id,
        ]);
        notify()->success('Candidature envoyé');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
