<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ConferenceController extends Controller
{
    //
    public function index(){
        $conferences = Conference::orderByDesc('date')->get();
        return view('conferences.index', ['conferences'=>$conferences]);
    }

    public function show($slug){
        $conference = Conference::find($slug);
        return view('conferences.show', ['conference'=>$conference]);
    }
}
