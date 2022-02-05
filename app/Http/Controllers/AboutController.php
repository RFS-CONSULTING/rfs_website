<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;
class AboutController extends Controller
{
    //
    public function index(){
        $statistics = Statistic::all();
        return view('about', ['statistics' => $statistics]);
    }
}
