@extends('layouts.web')

@section('title', ($profile->name ?? 'Bayan K') . ' - Flutter Developer Portfolio')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <!-- Background Grid Pattern -->
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.03)_1px,transparent_1px)] bg-[size:60px_60px] [mask-image:radial-gradient(ellipse_80%_50%_at_50%_0%,#000_70%,transparent_110%)]">
        </div>

        <!-- Glow Effects -->
        <div
            class="absolute top-1/4 left-1/2 -translate-x-1/2 w-[600px] h-[600px] bg-[#C9B037]/[0.05] rounded-full blur-[120px] animate-pulse-gold">
        </div>

        <div class="container max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-16">

                <!-- Text Content -->
                <div class="w-full lg:w-1/2 space-y-8">
                    <!-- Badge -->
                    <div
                        class="reveal inline-flex items-center px-4 py-2 rounded-full border border-[#C9B037]/30 bg-[#111111]/50 backdrop-blur-sm text-[#C9B037] text-sm font-medium">
                        <span class="flex h-2 w-2 rounded-full bg-[#C9B037] mr-3 animate-pulse"></span>
                        Available for Freelance
                    </div>

                    <!-- Heading -->
                    <div class="reveal">
                        <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold font-heading leading-[0.9] tracking-tight">
                            <span class="text-white">Hi, I'm</span><br>
                            <span class="gradient-text-gold text-glow-gold">{{ $profile->name ?? 'Bayan K' }}</span>
                        </h1>
                    </div>

                    <!-- Typing Animation -->
                    <div class="reveal h-10 text-2xl md:text-3xl text-[#888888] font-light" x-data="{
                        text: '',
                        textArray: ['Flutter Developer', 'Mobile Architect', 'UI/UX Enthusiast'],
                        textIndex: 0,
                        charIndex: 0,
                        typeSpeed: 80,
                        direction: 'forward',
                        init() {
                            let that = this;
                            setInterval(function() {
                                if (that.direction == 'forward') {
                                    that.text = that.textArray[that.textIndex].substring(0, that.charIndex);
                                    that.charIndex++;
                                    if (that.charIndex > that.textArray[that.textIndex].length) {
                                        that.direction = 'backward';
                                    }
                                } else {
                                    that.text = that.textArray[that.textIndex].substring(0, that.charIndex);
                                    that.charIndex--;
                                    if (that.charIndex < 0) {
                                        that.direction = 'forward';
                                        that.textIndex++;
                                        if (that.textIndex >= that.textArray.length) that.textIndex = 0;
                                    }
                                }
                            }, this.typeSpeed);
                        },
                    }">
                        I build <span class="text-[#C9B037] font-medium" x-text="text"></span><span
                            class="text-[#C9B037] animate-pulse">|</span>
                    </div>

                    <!-- Description -->
                    <p class="reveal text-lg text-[#888888] max-w-lg leading-relaxed">
                        {{ \Illuminate\Support\Str::limit($profile->about ?? 'Crafting beautiful, high-performance mobile applications with Flutter and modern technologies.', 180) }}
                    </p>

                    <!-- CTA Buttons -->
                    <div class="reveal flex flex-wrap gap-4">
                        <a href="#projects"
                            class="px-8 py-4 btn-gold rounded-2xl font-semibold text-lg magnetic-btn ripple flex items-center group">
                            View My Work
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="px-8 py-4 btn-outline-gold rounded-2xl font-semibold text-lg magnetic-btn">
                            Contact Me
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="reveal flex items-center gap-8 pt-8 border-t border-[#2A2A2A]">
                        <div>
                            <div class="text-3xl font-bold text-[#C9B037]">50+</div>
                            <div class="text-sm text-[#888888]">Projects</div>
                        </div>
                        <div class="w-px h-12 bg-[#2A2A2A]"></div>
                        <div>
                            <div class="text-3xl font-bold text-[#C9B037]">{{ $profile->experience_years ?? '5' }}+</div>
                            <div class="text-sm text-[#888888]">Years Exp.</div>
                        </div>
                        <div class="w-px h-12 bg-[#2A2A2A]"></div>
                        <div>
                            <div class="text-3xl font-bold text-[#C9B037]">30+</div>
                            <div class="text-sm text-[#888888]">Clients</div>
                        </div>
                    </div>
                </div>

                <!-- Hero Image -->
                <div class="w-full lg:w-1/2 relative reveal-right">
                    <div class="relative w-full max-w-md mx-auto aspect-square">
                        <!-- Glow Behind Image -->
                        <div
                            class="absolute inset-0 bg-gradient-to-tr from-[#C9B037]/20 to-[#9A8420]/10 rounded-[3rem] blur-2xl animate-pulse-gold">
                        </div>

                        @if ($profile && $profile->avatar_path)
                            <div
                                class="relative w-full h-full rounded-[2rem] overflow-hidden border-2 border-[#C9B037]/20 shadow-2xl group">
                                <img src="{{ Storage::url($profile->avatar_path) }}" alt="Profile"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0A0A0A]/80 to-transparent"></div>
                            </div>
                        @else
                            <div
                                class="relative w-full h-full rounded-[2rem] overflow-hidden border-2 border-[#C9B037]/20 shadow-2xl">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=500&fit=crop&crop=face"
                                    alt="Developer" class="w-full h-full object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0A0A0A]/80 to-transparent"></div>
                            </div>
                        @endif

                        <!-- Floating Cards -->
                        <div
                            class="absolute -right-4 top-8 p-4 glass-card rounded-2xl animate-float glow-gold-sm border border-[#C9B037]/20">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-[#C9B037]/10 flex items-center justify-center">
                                    <svg class="w-5 h-5 text-[#C9B037]" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs text-[#888888]">Status</p>
                                    <p class="font-bold text-white text-sm">Available</p>
                                </div>
                            </div>
                        </div>

                        <div
                            class="absolute -left-4 bottom-16 p-4 glass-card rounded-2xl animate-float-delayed border border-[#C9B037]/20">
                            <div class="flex items-center gap-3">
                                <div class="flex -space-x-2">
                                    <img src="https://i.pravatar.cc/32?img=1"
                                        class="w-8 h-8 rounded-full border-2 border-[#161616]" alt="">
                                    <img src="https://i.pravatar.cc/32?img=2"
                                        class="w-8 h-8 rounded-full border-2 border-[#161616]" alt="">
                                </div>
                                <span class="text-sm font-medium text-white">Happy Clients</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-[#888888]">
            <span class="text-xs uppercase tracking-widest">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-[#C9B037] to-transparent animate-pulse"></div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-32 bg-[#0A0A0A] relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20 reveal">
                <span class="text-[#C9B037] font-medium tracking-wider uppercase text-sm">Expertise</span>
                <h2 class="mt-4 text-4xl md:text-5xl font-bold font-heading text-white">Technical Skills</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#9A8420] to-[#C9B037] mx-auto rounded-full mt-6"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 stagger-grid">
                @foreach ($skills as $category => $categorySkills)
                    <div
                        class="stagger-item group bg-[#111111] rounded-2xl p-8 border border-[#2A2A2A] hover:border-[#C9B037]/50 transition-all duration-500 card-hover">
                        <h3
                            class="text-xl font-bold text-white mb-8 pb-4 border-b border-[#2A2A2A] group-hover:border-[#C9B037]/30 transition-colors flex items-center">
                            <span class="w-2 h-2 rounded-full bg-[#C9B037] mr-3"></span>
                            {{ $category }}
                        </h3>

                        <div class="space-y-6">
                            @foreach ($categorySkills as $skill)
                                <div>
                                    <div class="flex justify-between mb-2">
                                        <span class="text-[#FFFFFF] font-medium">{{ $skill->name }}</span>
                                        <span class="text-[#C9B037] text-sm font-bold">{{ $skill->proficiency }}%</span>
                                    </div>
                                    <div class="skill-bar h-1.5">
                                        <div class="skill-bar-fill" style="width: {{ $skill->proficiency }}%"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section id="projects" class="py-32 bg-[#0A0A0A] relative">
        <!-- Section BG -->
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.02)_1px,transparent_1px)] bg-[size:80px_80px]">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6 reveal">
                <div>
                    <span class="text-[#C9B037] font-medium tracking-wider uppercase text-sm">Portfolio</span>
                    <h2 class="mt-4 text-4xl md:text-5xl font-bold font-heading text-white">Featured Work</h2>
                </div>
                <a href="{{ route('projects.index') }}"
                    class="group flex items-center text-[#C9B037] hover:text-[#E5D68A] font-medium transition-colors">
                    View All
                    <span
                        class="ml-3 w-10 h-10 rounded-full border border-[#C9B037]/30 flex items-center justify-center group-hover:bg-[#C9B037]/10 group-hover:border-[#C9B037] transition-all duration-300">
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-grid">
                @foreach ($featuredProjects as $index => $project)
                    <div class="stagger-item">
                        <a href="{{ route('projects.show', $project) }}" class="block group">
                            <div
                                class="tilt-card relative h-[420px] bg-[#111111] rounded-2xl border border-[#2A2A2A] overflow-hidden card-hover hover:border-[#C9B037]/50">
                                <!-- Image -->
                                <div class="h-[55%] overflow-hidden relative">
                                    @if ($project->image_path)
                                        <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @else
                                        {{-- Use placeholder images based on project index --}}
                                        @php
                                            $placeholders = [
                                                'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop',
                                                'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop',
                                                'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=600&h=400&fit=crop',
                                            ];
                                        @endphp
                                        <img src="{{ $placeholders[$index % count($placeholders)] }}"
                                            alt="{{ $project->title }}"
                                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @endif

                                    <!-- Overlay -->
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-[#111111] via-transparent to-transparent">
                                    </div>

                                    <!-- Hover CTA -->
                                    <div
                                        class="absolute inset-0 bg-[#0A0A0A]/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <span
                                            class="px-6 py-3 bg-[#C9B037]/20 backdrop-blur-md border border-[#C9B037]/40 text-[#C9B037] rounded-full font-medium transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                            View Project
                                        </span>
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="p-6 h-[45%] flex flex-col">
                                    <h3
                                        class="text-xl font-bold text-white mb-2 group-hover:text-[#C9B037] transition-colors">
                                        {{ $project->title }}</h3>
                                    <p class="text-[#888888] text-sm line-clamp-2 mb-4 flex-1">
                                        {{ $project->brief_description }}</p>

                                    <div class="flex flex-wrap gap-2">
                                        @if (is_array($project->technologies))
                                            @foreach (array_slice($project->technologies, 0, 3) as $tech)
                                                <span
                                                    class="px-3 py-1 bg-[#C9B037]/10 text-[#C9B037] rounded-lg text-xs font-medium border border-[#C9B037]/20">{{ $tech }}</span>
                                            @endforeach
                                            @if (count($project->technologies) > 3)
                                                <span
                                                    class="px-3 py-1 bg-[#161616] text-[#888888] rounded-lg text-xs">+{{ count($project->technologies) - 3 }}</span>
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

    <!-- Services Section -->
    @if ($services->count() > 0)
        <section class="py-32 bg-[#0A0A0A]">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-20 reveal">
                    <span class="text-[#C9B037] font-medium tracking-wider uppercase text-sm">Services</span>
                    <h2 class="mt-4 text-4xl md:text-5xl font-bold font-heading text-white">How I Can Help</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-[#9A8420] to-[#C9B037] mx-auto rounded-full mt-6"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 stagger-grid">
                    @foreach ($services as $service)
                        <div
                            class="stagger-item p-8 bg-[#111111] rounded-2xl border border-[#2A2A2A] hover:border-[#C9B037]/50 transition-all duration-500 card-hover group">
                            <div
                                class="w-14 h-14 rounded-2xl bg-[#C9B037]/10 border border-[#C9B037]/20 flex items-center justify-center mb-6 group-hover:bg-[#C9B037]/20 transition-colors">
                                <svg class="w-7 h-7 text-[#C9B037]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-white mb-4 group-hover:text-[#C9B037] transition-colors">
                                {{ $service->title }}</h3>
                            <p class="text-[#888888] leading-relaxed">{{ $service->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- Testimonials Section -->
    @if ($testimonials->count() > 0)
        <section class="py-32 bg-[#111111] relative overflow-hidden">
            <div
                class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.015)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.015)_1px,transparent_1px)] bg-[size:40px_40px]">
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-20 reveal">
                    <span class="text-[#C9B037] font-medium tracking-wider uppercase text-sm">Testimonials</span>
                    <h2 class="mt-4 text-4xl md:text-5xl font-bold font-heading text-white">Client Feedback</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-[#9A8420] to-[#C9B037] mx-auto rounded-full mt-6"></div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 stagger-grid">
                    @foreach ($testimonials as $index => $testimonial)
                        <div
                            class="stagger-item bg-[#161616] p-8 rounded-2xl border border-[#2A2A2A] relative glow-gold-sm">
                            <div class="absolute top-6 right-8 text-6xl text-[#C9B037]/20 font-serif leading-none">"</div>
                            <p class="text-[#FFFFFF] mb-8 relative z-10 leading-relaxed">{{ $testimonial->content }}</p>
                            <div class="flex items-center gap-4">
                                @if ($testimonial->image_path)
                                    <img src="{{ Storage::url($testimonial->image_path) }}"
                                        alt="{{ $testimonial->name }}"
                                        class="w-12 h-12 rounded-full object-cover border-2 border-[#C9B037]/30">
                                @else
                                    <img src="https://i.pravatar.cc/48?img={{ $index + 10 }}"
                                        alt="{{ $testimonial->name }}"
                                        class="w-12 h-12 rounded-full object-cover border-2 border-[#C9B037]/30">
                                @endif
                                <div>
                                    <h4 class="font-bold text-white">{{ $testimonial->name }}</h4>
                                    <p class="text-sm text-[#C9B037]">
                                        {{ $testimonial->role }}{{ $testimonial->company ? ', ' . $testimonial->company : '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA Section -->
    <section class="py-32 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-[#111111] to-[#161616]"></div>
        <div
            class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.03)_1px,transparent_1px)] bg-[size:60px_60px]">
        </div>

        <!-- Glow -->
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-[#C9B037]/[0.05] rounded-full blur-[100px]">
        </div>

        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <h2 class="reveal text-4xl md:text-6xl font-bold font-heading text-white mb-8">Ready to Start?</h2>
            <p class="reveal text-xl text-[#888888] mb-12 max-w-2xl mx-auto leading-relaxed">
                Let's turn your vision into a high-performance digital product. I'm available for freelance work and
                collaboration.
            </p>
            <div class="reveal flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}"
                    class="px-10 py-5 btn-gold rounded-2xl font-bold text-lg magnetic-btn ripple">
                    Get in Touch
                </a>
                <a href="{{ route('projects.index') }}"
                    class="px-10 py-5 btn-outline-gold rounded-2xl font-bold text-lg magnetic-btn">
                    View Portfolio
                </a>
            </div>
        </div>
    </section>
@endsection
