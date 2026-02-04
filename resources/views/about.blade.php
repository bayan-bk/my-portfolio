@extends('layouts.web')

@section('title', 'About Me - ' . ($profile->name ?? 'Bayan K'))

@section('content')
    <!-- Header Section -->
    <section class="pt-32 pb-16 bg-[#0A0A0A] relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.02)_1px,transparent_1px)] bg-[size:60px_60px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center reveal">
                <span class="text-[#C9B037] font-medium tracking-wider uppercase text-sm">My Journey</span>
                <h1 class="mt-4 text-4xl md:text-6xl font-bold font-heading text-white">About Me</h1>
                <div class="w-20 h-1 bg-gradient-to-r from-[#9A8420] to-[#C9B037] mx-auto rounded-full mt-6"></div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-20 bg-[#0A0A0A]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Profile Sidebar -->
                <div class="lg:col-span-4 reveal-left">
                    <div class="sticky top-28 space-y-8">
                        <!-- Profile Card -->
                        <div
                            class="bg-[#111111] rounded-3xl p-8 border border-[#2A2A2A] overflow-hidden relative group glow-gold-sm">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-[#C9B037]/[0.03] to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            </div>

                            <div class="relative z-10 text-center">
                                <!-- Avatar -->
                                <div class="relative inline-block mb-6">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-tr from-[#C9B037]/30 to-[#9A8420]/20 rounded-full blur-xl animate-pulse-gold">
                                    </div>
                                    @if ($profile->avatar_path)
                                        <img src="{{ Storage::url($profile->avatar_path) }}" alt="{{ $profile->name }}"
                                            class="relative w-36 h-36 rounded-full object-cover border-4 border-[#C9B037]/30 shadow-lg">
                                    @else
                                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=200&h=200&fit=crop&crop=face"
                                            alt="{{ $profile->name }}"
                                            class="relative w-36 h-36 rounded-full object-cover border-4 border-[#C9B037]/30 shadow-lg">
                                    @endif
                                </div>

                                <h2 class="text-2xl font-bold text-white mb-1">{{ $profile->name }}</h2>
                                <p class="text-[#C9B037] font-medium mb-8">{{ $profile->role }}</p>

                                <!-- Info Items -->
                                <div class="space-y-4 text-left bg-[#161616]/50 rounded-2xl p-6 border border-[#2A2A2A]">
                                    <div class="flex items-center text-[#FFFFFF]/80">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center mr-4 text-[#C9B037]">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm">{{ $profile->location }}</span>
                                    </div>
                                    <div class="flex items-center text-[#FFFFFF]/80">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center mr-4 text-[#C9B037]">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                                </path>
                                            </svg>
                                        </div>
                                        <span class="text-sm truncate">{{ $profile->email }}</span>
                                    </div>
                                    <div class="flex items-center text-[#FFFFFF]/80">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center mr-4 text-[#C9B037]">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm">{{ $profile->experience_years }} Years Experience</span>
                                    </div>
                                </div>

                                <!-- Social Links -->
                                <div class="mt-8 flex justify-center space-x-4">
                                    @if ($profile->github)
                                        <a href="{{ $profile->github }}" target="_blank"
                                            class="w-10 h-10 rounded-full bg-[#161616] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($profile->linkedin)
                                        <a href="{{ $profile->linkedin }}" target="_blank"
                                            class="w-10 h-10 rounded-full bg-[#161616] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                    @endif
                                    @if ($profile->twitter)
                                        <a href="{{ $profile->twitter }}" target="_blank"
                                            class="w-10 h-10 rounded-full bg-[#161616] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z">
                                                </path>
                                            </svg>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if ($profile->resume_path)
                            <a href="{{ Storage::url($profile->resume_path) }}" target="_blank"
                                class="block w-full py-4 text-center btn-gold rounded-2xl font-bold magnetic-btn ripple">
                                Download Resume
                            </a>
                        @endif

                        <!-- Bio -->
                        <div class="text-[#888888] leading-relaxed">
                            <p>{{ $profile->about }}</p>
                        </div>
                    </div>
                </div>

                <!-- Main Timeline Content -->
                <div class="lg:col-span-8 space-y-20">

                    <!-- Experience Timeline -->
                    <div class="reveal-right">
                        <div class="flex items-center gap-4 mb-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center text-[#C9B037]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold font-heading text-white">Experience</h3>
                        </div>

                        <div class="timeline-container relative pl-8 border-l-2 border-[#C9B037]/30 space-y-10">
                            <div class="timeline-line"></div>
                            @foreach ($experiences as $exp)
                                <div class="relative reveal">
                                    <!-- Dot -->
                                    <div
                                        class="absolute -left-[41px] top-2 w-3 h-3 rounded-full bg-[#C9B037] border-4 border-[#0A0A0A] shadow-[0_0_10px_rgba(201,176,55,0.5)]">
                                    </div>

                                    <div
                                        class="bg-[#111111] rounded-2xl p-6 border border-[#2A2A2A] hover:border-[#C9B037]/30 transition-all duration-300 group card-hover">
                                        <div class="flex flex-col sm:flex-row justify-between sm:items-center mb-4 gap-2">
                                            <h4
                                                class="text-xl font-bold text-white group-hover:text-[#C9B037] transition-colors">
                                                {{ $exp->role }}</h4>
                                            <span
                                                class="px-4 py-1.5 bg-[#C9B037]/10 rounded-lg text-sm font-medium text-[#C9B037] border border-[#C9B037]/20 whitespace-nowrap">
                                                {{ $exp->start_date->format('M Y') }} -
                                                {{ $exp->end_date ? $exp->end_date->format('M Y') : 'Present' }}
                                            </span>
                                        </div>
                                        <div class="mb-4">
                                            <span class="text-lg font-medium text-[#FFFFFF]/80">{{ $exp->company }}</span>
                                        </div>
                                        <p class="text-[#888888] whitespace-pre-line leading-relaxed">
                                            {{ $exp->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Education -->
                    <div class="reveal-right">
                        <div class="flex items-center gap-4 mb-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center text-[#C9B037]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold font-heading text-white">Education</h3>
                        </div>

                        <div class="space-y-6 stagger-grid">
                            @foreach ($education as $edu)
                                <div
                                    class="stagger-item flex flex-col md:flex-row gap-6 p-6 bg-[#111111] rounded-2xl border border-[#2A2A2A] hover:border-[#C9B037]/30 transition-all duration-300 card-hover">
                                    <div class="flex-shrink-0">
                                        <div
                                            class="w-16 h-16 rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center text-[#C9B037]">
                                            <svg class="w-8 h-8" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex flex-col sm:flex-row justify-between mb-2">
                                            <h4 class="text-lg font-bold text-white">{{ $edu->institution }}</h4>
                                            <span
                                                class="text-sm font-medium text-[#C9B037]">{{ $edu->start_date->format('Y') }}
                                                - {{ $edu->end_date ? $edu->end_date->format('Y') : 'Present' }}</span>
                                        </div>
                                        <p class="text-[#FFFFFF]/80 font-medium mb-2">{{ $edu->degree }}</p>
                                        @if ($edu->description)
                                            <p class="text-[#888888] text-sm leading-relaxed">{{ $edu->description }}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Certificates -->
                    <div class="reveal-right">
                        <div class="flex items-center gap-4 mb-10">
                            <div
                                class="w-14 h-14 rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center text-[#C9B037]">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold font-heading text-white">Certifications</h3>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 stagger-grid">
                            @foreach ($certificates as $cert)
                                <div
                                    class="stagger-item bg-[#111111] p-6 rounded-2xl border border-[#2A2A2A] hover:border-[#C9B037]/30 transition-all duration-300 group card-hover">
                                    <div class="flex items-center justify-between mb-4">
                                        <span
                                            class="bg-[#C9B037]/10 text-[#C9B037] text-xs font-bold px-3 py-1.5 rounded-lg uppercase tracking-wide border border-[#C9B037]/20">{{ $cert->date->format('M Y') }}</span>
                                        @if ($cert->url)
                                            <a href="{{ $cert->url }}" target="_blank"
                                                class="text-[#888888] hover:text-[#C9B037] transition-colors">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="1.5"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                    </path>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                    <h4 class="font-bold text-white mb-1 group-hover:text-[#C9B037] transition-colors">
                                        {{ $cert->name }}</h4>
                                    <p class="text-sm text-[#888888]">{{ $cert->issuer }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
