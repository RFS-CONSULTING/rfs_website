<?php

namespace App\Http\Controllers;

use App\Models\users_formations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserFormation extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users_formations.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users_formations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $curentuser = Auth::user();

        $data = users_formations::create([
            'user_id'=>$curentuser->id,
            'formation_id'=>$request->formation_id
        ]);

        return back()->with('success','cette formation a été ajouté à votre programme avec sucées');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\users_formations  $users_formations
     * @return \Illuminate\Http\Response
     */
    public function show(users_formations $users_formations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\users_formations  $users_formations
     * @return \Illuminate\Http\Response
     */
    public function edit(users_formations $users_formations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\users_formations  $users_formations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users_formations $users_formations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\users_formations  $users_formations
     * @return \Illuminate\Http\Response
     */
    public function destroy(users_formations $users_formations)
    {
        //
    }
}
