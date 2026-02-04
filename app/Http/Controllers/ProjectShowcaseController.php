<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use Illuminate\View\View;

class ProjectShowcaseController extends Controller
{
    public function index(): View
    {
        $projects = Project::orderBy('sort_order')->get();
        return view('projects.index', compact('projects'));
    }

    public function show(Project $project): View
    {
        return view('projects.show', compact('project'));
    }
}
