@extends('layouts.web')

@section('title', 'Projects - Bayan K')

@section('content')
    <!-- Header -->
    <section class="pt-24 sm:pt-28 lg:pt-32 pb-12 sm:pb-16 bg-[#0A0A0A] relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.02)_1px,transparent_1px)] bg-[size:40px_40px] sm:bg-[size:60px_60px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="text-center reveal">
                <span class="text-[#C9B037] font-medium tracking-wider uppercase text-xs sm:text-sm">Portfolio</span>
                <h1 class="mt-3 sm:mt-4 text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold font-heading text-white">My
                    Projects</h1>
                <p class="mt-4 sm:mt-6 text-sm sm:text-base lg:text-lg text-[#888888] max-w-2xl mx-auto leading-relaxed">
                    A collection of projects I've worked on, from enterprise applications to creative experiments.
                </p>
                <div class="w-16 sm:w-20 h-1 bg-gradient-to-r from-[#9A8420] to-[#C9B037] mx-auto rounded-full mt-6 sm:mt-8">
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-12 sm:py-16 lg:py-20 bg-[#0A0A0A] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8 stagger-grid">
                @foreach ($projects as $index => $project)
                    <div class="stagger-item">
                        <a href="{{ route('projects.show', $project->slug) }}" class="block group h-full">
                            <div
                                class="tilt-card relative h-[380px] sm:h-[420px] lg:h-[450px] bg-[#111111] rounded-xl sm:rounded-2xl border border-[#2A2A2A] overflow-hidden card-hover hover:border-[#C9B037]/50 flex flex-col">

                                <!-- Image Container -->
                                <div class="h-[50%] sm:h-[55%] overflow-hidden relative flex-shrink-0">
                                    <img src="{{ $project->image }}" alt="{{ $project->title }}"
                                        class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">

                                    <!-- Gradient Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent">
                                    </div>

                                    <!-- Tag -->
                                    <div
                                        class="absolute top-3 sm:top-4 right-3 sm:right-4 px-2.5 sm:px-3 py-1 sm:py-1.5 bg-[#0A0A0A]/80 backdrop-blur-md rounded-md sm:rounded-lg text-[10px] sm:text-xs font-bold uppercase tracking-wider text-[#C9B037] border border-[#C9B037]/30">
                                        Project
                                    </div>

                                    <!-- Hover Overlay -->
                                    <div
                                        class="absolute inset-0 bg-[#0A0A0A]/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-4 sm:p-6">
                                        <span class="text-[#C9B037] font-medium flex items-center text-sm sm:text-base">
                                            View Case Study
                                            <svg class="w-3 h-3 sm:w-4 sm:h-4 ml-2 transform group-hover:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="p-4 sm:p-5 lg:p-6 flex-1 flex flex-col">
                                    <h3
                                        class="text-base sm:text-lg lg:text-xl font-bold text-white mb-2 sm:mb-3 group-hover:text-[#C9B037] transition-colors line-clamp-1">
                                        {{ $project->title }}</h3>
                                    <p
                                        class="text-[#888888] text-xs sm:text-sm mb-4 sm:mb-6 flex-1 leading-relaxed line-clamp-2 sm:line-clamp-3">
                                        {{ $project->brief_description }}
                                    </p>

                                    <div class="flex flex-wrap gap-1.5 sm:gap-2">
                                        @foreach (array_slice($project->technologies, 0, 3) as $tech)
                                            <span
                                                class="px-2 sm:px-3 py-0.5 sm:py-1 bg-[#C9B037]/10 text-[#C9B037] rounded-md sm:rounded-lg text-[10px] sm:text-xs font-medium border border-[#C9B037]/20">{{ $tech }}</span>
                                        @endforeach
                                        @if (count($project->technologies) > 3)
                                            <span
                                                class="px-2 sm:px-3 py-0.5 sm:py-1 bg-[#161616] text-[#888888] rounded-md sm:rounded-lg text-[10px] sm:text-xs font-medium">+{{ count($project->technologies) - 3 }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 sm:py-20 lg:py-24 bg-[#111111] border-t border-[#2A2A2A]">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center reveal">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold font-heading text-white mb-4 sm:mb-6">Have a Project in
                Mind?</h2>
            <p class="text-sm sm:text-base lg:text-lg text-[#888888] mb-6 sm:mb-8 lg:mb-10 max-w-2xl mx-auto">
                I'm always open to discussing new projects, creative ideas, or opportunities to be part of your vision.
            </p>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center px-6 sm:px-8 lg:px-10 py-3 sm:py-4 lg:py-5 btn-gold rounded-xl sm:rounded-2xl font-bold text-base sm:text-lg magnetic-btn ripple">
                Let's Talk
                <svg class="w-4 h-4 sm:w-5 sm:h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                    </path>
                </svg>
            </a>
        </div>
    </section>
@endsection
