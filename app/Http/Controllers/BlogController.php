<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $blogs = Blog::orderBy('published_at', 'desc')->get();
        return view('blog.index', compact('blogs'));
    }

    public function show(Blog $blog): View
    {
        return view('blog.show', compact('blog'));
    }
}
