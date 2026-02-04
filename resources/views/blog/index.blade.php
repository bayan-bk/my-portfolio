@extends('layouts.web')

@section('title', 'Blog - Bayan K')

@section('content')
    <section class="py-20 bg-gray-50 dark:bg-gray-950 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">Blog & Thoughts</h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                    Sharing my journey, tutorials, and tech insights.
                </p>
            </div>

            @if ($blogs->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($blogs as $blog)
                        <a href="{{ route('blog.show', $blog) }}"
                            class="group block bg-white dark:bg-gray-900 rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-800">
                            <div class="relative h-48 overflow-hidden">
                                @if ($blog->image_path)
                                    <img src="{{ Storage::url($blog->image_path) }}" alt="{{ $blog->title }}"
                                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                                @else
                                    <div
                                        class="w-full h-full bg-gray-200 dark:bg-gray-800 flex items-center justify-center">
                                        <span class="text-gray-400 text-4xl font-bold opacity-30">#</span>
                                    </div>
                                @endif
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 dark:text-gray-400 mb-2">
                                    <span>{{ $blog->published_at ? $blog->published_at->format('M d, Y') : 'Draft' }}</span>
                                    @if ($blog->published_at)
                                        <span class="mx-2">•</span><span>{{ $blog->published_at->diffForHumans() }}</span>
                                    @endif
                                </div>
                                <h3
                                    class="text-xl font-bold text-gray-900 dark:text-white mb-3 group-hover:text-blue-600 transition">
                                    {{ $blog->title }}</h3>
                                <p class="text-gray-600 dark:text-gray-400 line-clamp-3">{{ $blog->excerpt }}</p>
                                <span
                                    class="inline-block mt-4 text-blue-600 dark:text-blue-400 font-medium group-hover:translate-x-1 transition">Read
                                    Article &rarr;</span>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="text-center py-20">
                    <div class="mb-6">
                        <svg class="w-20 h-20 text-gray-300 mx-auto" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                            </path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-700 dark:text-gray-300">No Articles Yet</h2>
                    <p class="text-gray-500 dark:text-gray-400 mt-2">Check back soon for new content!</p>
                </div>
            @endif
        </div>
    </section>
@endsection
