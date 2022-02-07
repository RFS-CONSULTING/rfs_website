<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Sponsor;
use App\Models\Statistic;

class HomeController extends Controller
{
    
    public function index()
    {
        $services = Service::all();
        $testimonials = Testimonial::all();
        $sponsors = Sponsor::all();
        $statistics = Statistic::all();

        return view('welcome',[
            'services'=>$services,
            'testimonials' => $testimonials,
            'sponsors' => $sponsors,
            'statistics' => $statistics,
        ]);
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
