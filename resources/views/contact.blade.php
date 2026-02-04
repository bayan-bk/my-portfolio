@extends('layouts.web')

@section('title', 'Contact Me - ' . ($profile->name ?? 'Bayan K'))

@section('content')
    <section class="py-24 sm:py-28 lg:py-32 bg-[#0A0A0A] min-h-screen flex items-center relative overflow-hidden">
        <!-- Background Elements -->
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.02)_1px,transparent_1px)] bg-[size:40px_40px] sm:bg-[size:60px_60px]">
        </div>
        <div
            class="absolute top-1/4 right-0 w-[250px] sm:w-[350px] md:w-[500px] h-[250px] sm:h-[350px] md:h-[500px] bg-[#C9B037]/[0.03] rounded-full blur-[80px] sm:blur-[100px]">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 w-full relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 sm:gap-12 lg:gap-16">
                <!-- Contact Info -->
                <div class="space-y-8 sm:space-y-10 reveal-left">
                    <div class="text-center lg:text-left">
                        <span class="text-[#C9B037] font-medium tracking-wider uppercase text-xs sm:text-sm">Contact</span>
                        <h1
                            class="mt-3 sm:mt-4 text-3xl sm:text-4xl md:text-5xl font-bold font-heading text-white leading-tight">
                            Let's Work<br class="hidden sm:block">Together
                        </h1>
                        <p
                            class="mt-4 sm:mt-6 text-base sm:text-lg lg:text-xl text-[#888888] leading-relaxed max-w-lg mx-auto lg:mx-0">
                            Have a project in mind or just want to chat? I'm always open to discussing new opportunities.
                        </p>
                    </div>

                    <div class="space-y-4 sm:space-y-6">
                        <div class="flex items-start group">
                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center mr-4 sm:mr-5 text-[#C9B037] group-hover:bg-[#C9B037]/20 transition-colors flex-shrink-0">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-base sm:text-lg text-white mb-1">Email Me</h3>
                                <a href="mailto:{{ $profile->email ?? 'test@example.com' }}"
                                    class="text-[#888888] hover:text-[#C9B037] transition-colors text-sm sm:text-base break-all">{{ $profile->email ?? 'test@example.com' }}</a>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center mr-4 sm:mr-5 text-[#C9B037] group-hover:bg-[#C9B037]/20 transition-colors flex-shrink-0">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-base sm:text-lg text-white mb-1">Location</h3>
                                <p class="text-[#888888] text-sm sm:text-base">{{ $profile->location ?? 'Earth' }}</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div
                                class="w-12 h-12 sm:w-14 sm:h-14 rounded-xl sm:rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center mr-4 sm:mr-5 text-[#C9B037] group-hover:bg-[#C9B037]/20 transition-colors flex-shrink-0">
                                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-base sm:text-lg text-white mb-1">Phone</h3>
                                <p class="text-[#888888] text-sm sm:text-base">
                                    {{ $profile->phone ?? 'Contact for details' }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div
                        class="flex justify-center lg:justify-start space-x-3 sm:space-x-4 pt-4 sm:pt-6 border-t border-[#2A2A2A]">
                        @if ($profile->social['github'] ?? null)
                            <a href="{{ $profile->social['github'] }}" target="_blank"
                                class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg sm:rounded-xl bg-[#111111] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all magnetic-btn">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        @endif
                        @if ($profile->social['linkedin'] ?? null)
                            <a href="{{ $profile->social['linkedin'] }}" target="_blank"
                                class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg sm:rounded-xl bg-[#111111] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all magnetic-btn">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        @endif
                        @if ($profile->social['twitter'] ?? null)
                            <a href="{{ $profile->social['twitter'] }}" target="_blank"
                                class="w-10 h-10 sm:w-12 sm:h-12 rounded-lg sm:rounded-xl bg-[#111111] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all magnetic-btn">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                    </path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="reveal-right">
                    <div
                        class="bg-[#111111] rounded-2xl sm:rounded-3xl p-6 sm:p-8 md:p-10 border border-[#2A2A2A] glow-gold-sm">
                        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4 sm:space-y-6">
                            @csrf
                            @if (session('success'))
                                <div
                                    class="p-3 sm:p-4 bg-[#C9B037]/10 border border-[#C9B037]/30 text-[#C9B037] rounded-lg sm:rounded-xl mb-4 sm:mb-6 text-sm sm:text-base">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div
                                    class="p-3 sm:p-4 bg-red-500/10 border border-red-500/30 text-red-400 rounded-lg sm:rounded-xl mb-4 sm:mb-6 text-sm sm:text-base">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div>
                                <label for="name"
                                    class="block text-xs sm:text-sm font-medium text-[#FFFFFF]/80 mb-1.5 sm:mb-2">Your
                                    Name</label>
                                <input type="text" name="name" id="name" required
                                    class="w-full px-4 sm:px-5 py-3 sm:py-4 rounded-lg sm:rounded-xl bg-[#161616] border border-[#2A2A2A] focus:border-[#C9B037]/50 focus:ring-0 outline-none transition text-white placeholder-[#888888] text-sm sm:text-base"
                                    placeholder="John Doe">
                            </div>

                            <div>
                                <label for="email"
                                    class="block text-xs sm:text-sm font-medium text-[#FFFFFF]/80 mb-1.5 sm:mb-2">Email
                                    Address</label>
                                <input type="email" name="email" id="email" required
                                    class="w-full px-4 sm:px-5 py-3 sm:py-4 rounded-lg sm:rounded-xl bg-[#161616] border border-[#2A2A2A] focus:border-[#C9B037]/50 focus:ring-0 outline-none transition text-white placeholder-[#888888] text-sm sm:text-base"
                                    placeholder="john@example.com">
                            </div>

                            <div>
                                <label for="subject"
                                    class="block text-xs sm:text-sm font-medium text-[#FFFFFF]/80 mb-1.5 sm:mb-2">Subject</label>
                                <input type="text" name="subject" id="subject"
                                    class="w-full px-4 sm:px-5 py-3 sm:py-4 rounded-lg sm:rounded-xl bg-[#161616] border border-[#2A2A2A] focus:border-[#C9B037]/50 focus:ring-0 outline-none transition text-white placeholder-[#888888] text-sm sm:text-base"
                                    placeholder="Project Inquiry">
                            </div>

                            <div>
                                <label for="message"
                                    class="block text-xs sm:text-sm font-medium text-[#FFFFFF]/80 mb-1.5 sm:mb-2">Message</label>
                                <textarea name="message" id="message" rows="4" required
                                    class="w-full px-4 sm:px-5 py-3 sm:py-4 rounded-lg sm:rounded-xl bg-[#161616] border border-[#2A2A2A] focus:border-[#C9B037]/50 focus:ring-0 outline-none transition text-white placeholder-[#888888] resize-none text-sm sm:text-base"
                                    placeholder="Tell me about your project..."></textarea>
                            </div>

                            <button type="submit"
                                class="w-full py-3 sm:py-4 btn-gold rounded-xl sm:rounded-2xl font-bold text-base sm:text-lg magnetic-btn ripple">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
