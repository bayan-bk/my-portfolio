@extends('layouts.web')

@section('title', $project->title . ' - Project Details')

@section('content')
    <div class="bg-white dark:bg-gray-950 min-h-screen">
        <!-- Hero Header -->
        <div class="relative h-[60vh] bg-gray-900 overflow-hidden">
            @if ($project->image_path)
                <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}"
                    class="absolute inset-0 w-full h-full object-cover opacity-40">
            @else
                <div class="absolute inset-0 bg-gradient-to-br from-blue-900 to-gray-900 opacity-80"></div>
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-transparent to-transparent"></div>

            <div class="absolute bottom-0 left-0 w-full p-8 md:p-16">
                <div class="max-w-7xl mx-auto">
                    <a href="{{ route('projects.index') }}"
                        class="inline-flex items-center text-gray-300 hover:text-white mb-6 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Projects
                    </a>
                    <h1 class="text-4xl md:text-6xl font-bold text-white mb-4 animate-fade-in-up">{{ $project->title }}</h1>
                    <p class="text-xl text-gray-300 max-w-2xl animate-fade-in-up delay-100">
                        {{ $project->brief_description }}</p>

                    <div class="flex flex-wrap gap-3 mt-8 animate-fade-in-up delay-200">
                        @if (is_array($project->technologies))
                            @foreach ($project->technologies as $tech)
                                <span
                                    class="px-3 py-1.5 bg-white/10 backdrop-blur-md border border-white/20 text-white rounded-full text-sm font-medium">{{ $tech }}</span>
                            @endforeach
                        @endif
                    </div>

                    <div class="flex gap-4 mt-8 animate-fade-in-up delay-300">
                        @if ($project->live_url)
                            <a href="{{ $project->live_url }}" target="_blank"
                                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition shadow-lg shadow-blue-600/30 flex items-center">
                                Launch Live Demo
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                    </path>
                                </svg>
                            </a>
                        @endif
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank"
                                class="px-6 py-3 bg-white/10 hover:bg-white/20 text-white border border-white/20 rounded-xl font-semibold transition flex items-center">
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
        </div>

        <!-- Content -->
        <div class="max-w-4xl mx-auto px-4 sm:px-6 py-20">
            <div class="prose prose-lg dark:prose-invert max-w-none">
                {!! nl2br(e($project->full_description)) !!}
            </div>
        </div>
    </div>
@endsection
