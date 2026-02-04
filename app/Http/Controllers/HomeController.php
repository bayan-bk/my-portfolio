<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $portfolio = config('portfolio');

        $profile = (object) $portfolio['profile'];
        $skills = collect($portfolio['skills']);
        $featuredProjects = collect($portfolio['projects'])
            ->filter(fn($p) => $p['featured'] ?? false)
            ->take(3)
            ->map(fn($p) => (object) $p);
        $services = collect($portfolio['services'])->map(fn($s) => (object) $s);
        $testimonials = collect($portfolio['testimonials'])->map(fn($t) => (object) $t);

        return view('home', compact('profile', 'skills', 'featuredProjects', 'services', 'testimonials'));
    }

    public function about(): View
    {
        $portfolio = config('portfolio');

        $profile = (object) $portfolio['profile'];
        $skills = collect($portfolio['skills']);
        $experiences = collect($portfolio['experiences'])->map(fn($e) => (object) $e);
        $education = collect($portfolio['education'])->map(fn($e) => (object) $e);
        $certificates = collect($portfolio['certificates'])->map(fn($c) => (object) $c);

        return view('about', compact('profile', 'skills', 'experiences', 'education', 'certificates'));
    }
}
