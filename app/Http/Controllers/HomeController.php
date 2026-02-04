<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Project;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $profile = Profile::first();
        $skills = Skill::orderBy('sort_order')->get()->groupBy('category');
        $featuredProjects = Project::orderBy('sort_order')->take(3)->get();
        $services = Service::all();
        $testimonials = Testimonial::all();

        return view('home', compact('profile', 'skills', 'featuredProjects', 'services', 'testimonials'));
    }

    public function about(): View
    {
        $profile = Profile::with('user')->first();
        $skills = Skill::orderBy('sort_order')->get()->groupBy('category');
        $experiences = \App\Models\Experience::orderBy('sort_order')->get();
        $education = \App\Models\Education::orderBy('sort_order')->get();
        $certificates = \App\Models\Certificate::orderBy('sort_order')->get();

        return view('about', compact('profile', 'skills', 'experiences', 'education', 'certificates'));
    }
}
