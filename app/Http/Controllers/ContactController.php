<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $profile = (object) config('portfolio.profile');
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

        // Send email via SMTP
        $toEmail = config('portfolio.profile.email');
        $subject = $validated['subject'] ?? 'New Contact Form Message';

        try {
            Mail::send([], [], function ($message) use ($validated, $toEmail, $subject) {
                $message->to($toEmail)
                    ->replyTo($validated['email'], $validated['name'])
                    ->subject($subject)
                    ->html("
                        <h2>New Contact Form Submission</h2>
                        <p><strong>Name:</strong> {$validated['name']}</p>
                        <p><strong>Email:</strong> {$validated['email']}</p>
                        <p><strong>Subject:</strong> {$subject}</p>
                        <p><strong>Message:</strong></p>
                        <p>" . nl2br(e($validated['message'])) . "</p>
                    ");
            });

            return back()->with('success', 'Message sent successfully! I\'ll get back to you soon.');
        } catch (\Exception $e) {
            return back()->with('error', 'Sorry, there was an issue sending your message. Please try again or email me directly.');
        }
    }
}
