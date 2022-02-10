<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use App\Models\UsersFormations;
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
        //$formations = Formation::all();
        //return view('users_formations.create',['formations'=>$formations]);
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

        $data = UsersFormations::create([
            'user_id'=>$curentuser->id,
            'formation_id'=>$request->formation_id
        ]);
        return back()->with('success','cette formation a été ajouté à votre programme avec sucées');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UsersFormations  $UsersFormations
     * @return \Illuminate\Http\Response
     */
    public function show(UsersFormations $UsersFormations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UsersFormations  $UsersFormations
     * @return \Illuminate\Http\Response
     */
    public function edit(UsersFormations $UsersFormations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UsersFormations  $UsersFormations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsersFormations $UsersFormations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UsersFormations  $UsersFormations
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsersFormations $UsersFormations)
    {
        //
    }
}
