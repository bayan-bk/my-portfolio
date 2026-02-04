@extends('layouts.web')

@section('title', 'Contact Me - Bayan K')

@section('content')
    <section class="py-20 bg-white dark:bg-gray-950 min-h-screen flex items-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Contact Info -->
                <div class="space-y-8 animate-fade-in-left">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Let's Work Together
                        </h1>
                        <p class="text-xl text-gray-600 dark:text-gray-400 leading-relaxed">
                            Have a project in mind or just want to chat? I'm always open to discussing new opportunities and
                            ideas.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 dark:bg-blue-900/50 p-3 rounded-xl mr-5">
                                <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 dark:text-white">Email Me</h3>
                                <a href="mailto:{{ $profile->email ?? 'test@example.com' }}"
                                    class="text-gray-600 dark:text-gray-400 hover:text-blue-600 transition">{{ $profile->email ?? 'test@example.com' }}</a>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-purple-100 dark:bg-purple-900/50 p-3 rounded-xl mr-5">
                                <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 dark:text-white">Location</h3>
                                <p class="text-gray-600 dark:text-gray-400">{{ $profile->location ?? 'Earth' }}</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-green-100 dark:bg-green-900/50 p-3 rounded-xl mr-5">
                                <svg class="w-6 h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-900 dark:text-white">Phone</h3>
                                <p class="text-gray-600 dark:text-gray-400">{{ $profile->phone ?? 'Contact for details' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div
                    class="bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 border border-gray-100 dark:border-gray-800 shadow-xl animate-fade-in-right">
                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf
                        @if (session('success'))
                            <div
                                class="p-4 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-xl mb-6">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div>
                            <label for="name"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Your Name</label>
                            <input type="text" name="name" id="name" required
                                class="w-full px-4 py-3 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition dark:text-white"
                                placeholder="John Doe">
                        </div>

                        <div>
                            <label for="email"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email
                                Address</label>
                            <input type="email" name="email" id="email" required
                                class="w-full px-4 py-3 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition dark:text-white"
                                placeholder="john@example.com">
                        </div>

                        <div>
                            <label for="subject"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Subject</label>
                            <input type="text" name="subject" id="subject"
                                class="w-full px-4 py-3 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition dark:text-white"
                                placeholder="Project Inquiry">
                        </div>

                        <div>
                            <label for="message"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Message</label>
                            <textarea name="message" id="message" rows="5" required
                                class="w-full px-4 py-3 rounded-xl bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition dark:text-white"
                                placeholder="Tell me about your project..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl shadow-lg shadow-blue-600/30 transition transform hover:-translate-y-1">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
