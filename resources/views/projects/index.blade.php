@extends('layouts.web')

@section('title', 'Projects - Bayan K')

@section('content')
    <!-- Header Section -->
    <section class="pt-32 pb-16 bg-[#0A0A0A] relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.02)_1px,transparent_1px)] bg-[size:60px_60px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]">
        </div>

        <!-- Glow -->
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-[#C9B037]/[0.03] rounded-full blur-[100px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center reveal">
                <span class="text-[#C9B037] font-medium tracking-wider uppercase text-sm">Portfolio</span>
                <h1 class="mt-4 text-4xl md:text-6xl font-bold font-heading text-white">My Projects</h1>
                <p class="mt-6 text-xl text-[#888888] max-w-2xl mx-auto leading-relaxed">
                    A collection of work showcasing my expertise in mobile and web development.
                </p>
                <div class="w-20 h-1 bg-gradient-to-r from-[#9A8420] to-[#C9B037] mx-auto rounded-full mt-8"></div>
            </div>
        </div>
    </section>

    <!-- Projects Grid -->
    <section class="py-20 bg-[#0A0A0A] relative">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-grid">
                @foreach ($projects as $index => $project)
                    <div class="stagger-item">
                        <a href="{{ route('projects.show', $project) }}" class="block group h-full">
                            <div
                                class="tilt-card relative h-[450px] bg-[#111111] rounded-2xl border border-[#2A2A2A] overflow-hidden card-hover hover:border-[#C9B037]/50 flex flex-col">

                                <!-- Image Container -->
                                <div class="h-[55%] overflow-hidden relative flex-shrink-0">
                                    @if ($project->image_path)
                                        <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @else
                                        {{-- Placeholder images --}}
                                        @php
                                            $placeholders = [
                                                'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop',
                                                'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop',
                                                'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=600&h=400&fit=crop',
                                                'https://images.unsplash.com/photo-1526498460520-4c246339dccb?w=600&h=400&fit=crop',
                                                'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop',
                                                'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop',
                                            ];
                                        @endphp
                                        <img src="{{ $placeholders[$index % count($placeholders)] }}"
                                            alt="{{ $project->title }}"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @endif

                                    <!-- Gradient Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent">
                                    </div>

                                    <!-- Tag -->
                                    <div
                                        class="absolute top-4 right-4 px-3 py-1.5 bg-[#0A0A0A]/80 backdrop-blur-md rounded-lg text-xs font-bold uppercase tracking-wider text-[#C9B037] border border-[#C9B037]/30">
                                        Project
                                    </div>

                                    <!-- Hover Overlay -->
                                    <div
                                        class="absolute inset-0 bg-[#0A0A0A]/70 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                        <span class="text-[#C9B037] font-medium flex items-center">
                                            View Case Study
                                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="p-6 flex-1 flex flex-col">
                                    <h3
                                        class="text-xl font-bold text-white mb-3 group-hover:text-[#C9B037] transition-colors">
                                        {{ $project->title }}</h3>
                                    <p class="text-[#888888] text-sm mb-6 flex-1 leading-relaxed line-clamp-3">
                                        {{ $project->brief_description }}
                                    </p>

                                    <div class="flex flex-wrap gap-2 mt-auto">
                                        @if (is_array($project->technologies))
                                            @foreach (array_slice($project->technologies, 0, 4) as $tech)
                                                <span
                                                    class="px-3 py-1 bg-[#C9B037]/10 text-xs font-medium text-[#C9B037] rounded-lg border border-[#C9B037]/20">{{ $tech }}</span>
                                            @endforeach
                                            @if (count($project->technologies) > 4)
                                                <span
                                                    class="px-3 py-1 bg-[#161616] text-xs text-[#888888] rounded-lg border border-[#2A2A2A]">+{{ count($project->technologies) - 4 }}</span>
                                            @endif
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
@endsection
