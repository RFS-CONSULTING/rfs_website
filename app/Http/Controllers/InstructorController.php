<?php

namespace App\Http\Controllers;

use App\Models\Instructors;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('instructors.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('instructors.create');
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

        $validates = $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'job'=>'required',
            'description'=>'required',
            'facebook_link'=>'required',
            'whatsapp_link'=>'required',
            'linkedin_link'=>'required',
            'twitter_link'=>'required',
        ], [
            'name.required'=>'fiield is required',
            'email.required'=>'fiield is required',
            'email.email'=>'field must be email',
            'job.required'=>'fiield is required',
            'description.required'=>'fiield is required',
            'facebook_link.required'=>'fiield is required',
            'whatsapp_link.required'=>'fiield is required',
            'linkedin_link.required'=>'fiield is required',
            'twitter_link.required'=>'fiield is required',
        ]);

        $instructor = Instructors::create($validates);

        return back()->with('success','your acount creation request has mad successfuly');
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
