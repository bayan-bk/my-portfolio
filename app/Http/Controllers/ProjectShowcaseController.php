<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectShowcaseController extends Controller
{
    public function index(): View
    {
        $projects = collect(config('portfolio.projects'))->map(fn($p) => (object) $p);
        return view('projects.index', compact('projects'));
    }

    public function show(string $slug): View
    {
        $projectData = collect(config('portfolio.projects'))->firstWhere('slug', $slug);

        if (!$projectData) {
            abort(404);
        }

        $project = (object) $projectData;
        return view('projects.show', compact('project'));
    }
}
