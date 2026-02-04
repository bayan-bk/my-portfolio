<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Message;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $profile = \App\Models\Profile::first();
        return view('contact', compact('profile'));
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        Message::create($validated);

        return back()->with('success', 'Message sent successfully!');
    }
}
