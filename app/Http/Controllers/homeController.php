<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }

    public function aboutus()
    {
        return view('aboutsus');
    }

    public function team()
    {
        return view('teams');
    }

    public function realisations()
    {
        return view('realisations');
    }

    public function contacts()
    {
        return view('contacts');
    }
}
