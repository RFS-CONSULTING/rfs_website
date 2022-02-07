<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;
use App\Models\Testimonial;
use App\Models\Sponsor;
use App\Models\Team;

class AboutController extends Controller
{
    //
    public function index(){
        $statistics = Statistic::all();
        $testimonials = Testimonial::all();
        $sponsors = Sponsor::all();
        $teams = Team::all();
        return view('about', [
            'statistics' => $statistics,
            'testimonials' => $testimonials,
            'sponsors' => $sponsors,
            'teams' => $teams
        ]);
    }
}
