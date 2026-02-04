<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectShowcaseController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// Public Routes (Static Portfolio)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/projects', [ProjectShowcaseController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectShowcaseController::class, 'show'])->name('projects.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
