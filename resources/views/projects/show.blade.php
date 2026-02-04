@extends('layouts.web')

@section('title', $project->title . ' - Project Details')

@section('content')
    <div class="bg-[#0A0A0A] min-h-screen">
        <!-- Hero Header -->
        <div class="relative h-[70vh] md:h-[80vh] overflow-hidden flex items-end">
            <!-- Background Image -->
            @if ($project->image_path)
                <div class="absolute inset-0">
                    <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}"
                        class="w-full h-full object-cover opacity-30 transform scale-105">
                    <div class="absolute inset-0 bg-[#0A0A0A]/60 backdrop-blur-sm"></div>
                </div>
            @else
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=1200&h=800&fit=crop"
                        alt="{{ $project->title }}" class="w-full h-full object-cover opacity-20 transform scale-105">
                    <div class="absolute inset-0 bg-[#0A0A0A]/70"></div>
                </div>
            @endif

            <!-- Grid Pattern -->
            <div
                class="absolute inset-0 bg-[linear-gradient(rgba(201,176,55,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(201,176,55,0.03)_1px,transparent_1px)] bg-[size:60px_60px] [mask-image:linear-gradient(to_bottom,transparent,black_50%,black)]">
            </div>

            <!-- Gradient Overlays -->
            <div class="absolute inset-0 bg-gradient-to-t from-[#0A0A0A] via-[#0A0A0A]/50 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-[#0A0A0A]/80 to-transparent"></div>

            <!-- Glow -->
            <div class="absolute bottom-0 left-1/4 w-[600px] h-[400px] bg-[#C9B037]/[0.05] rounded-full blur-[100px]"></div>

            <div class="relative w-full max-w-7xl mx-auto px-6 pb-20 z-10">
                <a href="{{ route('projects.index') }}"
                    class="reveal inline-flex items-center text-[#888888] hover:text-[#C9B037] mb-8 transition-colors group">
                    <svg class="w-5 h-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    Back to Projects
                </a>

                <h1
                    class="reveal text-4xl md:text-6xl lg:text-7xl font-bold font-heading text-white mb-6 leading-tight max-w-4xl">
                    {{ $project->title }}
                </h1>

                <p class="reveal text-xl md:text-2xl text-[#FFFFFF]/80 max-w-3xl font-light leading-relaxed">
                    {{ $project->brief_description }}
                </p>

                <div class="reveal flex flex-wrap gap-3 mt-10">
                    @if (is_array($project->technologies))
                        @foreach ($project->technologies as $tech)
                            <span
                                class="px-4 py-2 bg-[#C9B037]/10 backdrop-blur-md border border-[#C9B037]/30 text-[#C9B037] rounded-full text-sm font-medium hover:bg-[#C9B037]/20 transition-all cursor-default">
                                {{ $tech }}
                            </span>
                        @endforeach
                    @endif
                </div>

                <div class="reveal flex flex-wrap gap-4 mt-12">
                    @if ($project->live_url)
                        <a href="{{ $project->live_url }}" target="_blank"
                            class="px-8 py-4 btn-gold rounded-2xl font-bold text-lg magnetic-btn ripple flex items-center group">
                            Launch Live Demo
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </a>
                    @endif
                    @if ($project->github_url)
                        <a href="{{ $project->github_url }}" target="_blank"
                            class="px-8 py-4 btn-outline-gold rounded-2xl font-bold text-lg magnetic-btn flex items-center group">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            View Source
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- Content -->
        <article class="max-w-4xl mx-auto px-6 py-24">
            <div
                class="reveal prose prose-lg prose-invert max-w-none prose-headings:font-heading prose-headings:text-white prose-p:text-[#FFFFFF]/80 prose-p:leading-relaxed prose-a:text-[#C9B037] hover:prose-a:text-[#E5D68A] prose-strong:text-white prose-ul:text-[#FFFFFF]/80 prose-ol:text-[#FFFFFF]/80">
                {!! nl2br(e($project->full_description)) !!}
            </div>
        </article>

        <!-- CTA Section -->
        <section class="py-24 border-t border-[#2A2A2A]">
            <div class="max-w-4xl mx-auto px-6 text-center reveal">
                <h3 class="text-3xl font-bold font-heading text-white mb-6">Interested in working together?</h3>
                <p class="text-[#888888] mb-10">Let's discuss your next project.</p>
                <a href="{{ route('contact') }}"
                    class="px-10 py-5 btn-gold rounded-2xl font-bold text-lg magnetic-btn ripple inline-block">
                    Get in Touch
                </a>
            </div>
        </section>
    </div>
@endsection
