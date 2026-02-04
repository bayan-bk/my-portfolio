@extends('layouts.web')

@section('title', 'Projects - Bayan K')

@section('content')
    <section class="py-20 bg-gray-50 dark:bg-gray-950 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">My Projects</h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    A collection of apps and tools I've built.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                    <!-- Project Card -->
                    <a href="{{ route('projects.show', $project) }}"
                        class="group flex flex-col bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-800 animate-fade-in"
                        style="animation-delay: {{ $loop->index * 100 }}ms">
                        <div class="relative h-56 overflow-hidden">
                            @if ($project->image_path)
                                <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            @else
                                <div
                                    class="w-full h-full bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-gray-800 dark:to-gray-700 flex items-center justify-center text-gray-400">
                                    <span class="text-5xl font-bold opacity-20">{{ substr($project->title, 0, 1) }}</span>
                                </div>
                            @endif
                        </div>

                        <div class="p-6 flex-1 flex flex-col">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 transition">
                                {{ $project->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mb-6 flex-1">
                                {{ $project->brief_description }}</p>

                            <div class="flex flex-wrap gap-2 mt-auto">
                                @if (is_array($project->technologies))
                                    @foreach (array_slice($project->technologies, 0, 4) as $tech)
                                        <span
                                            class="px-2.5 py-1 bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300 rounded text-xs font-medium">{{ $tech }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
