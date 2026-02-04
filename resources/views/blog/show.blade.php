@extends('layouts.web')

@section('title', $blog->title)

@section('content')
    <article class="py-20 bg-white dark:bg-gray-950 min-h-screen">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <a href="{{ route('blog.index') }}"
                class="inline-flex items-center text-gray-500 hover:text-blue-600 mb-8 transition">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18">
                    </path>
                </svg>
                Back to Blog
            </a>

            <header class="mb-10 text-center">
                <h1 class="text-3xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6 leading-tight">
                    {{ $blog->title }}</h1>
                <div class="flex items-center justify-center text-gray-500 dark:text-gray-400 space-x-4">
                    <span>{{ $blog->published_at ? $blog->published_at->format('F d, Y') : 'Draft' }}</span>
                    <!-- Add Reading Time if available -->
                </div>
            </header>

            @if ($blog->image_path)
                <div class="mb-12 rounded-2xl overflow-hidden shadow-lg">
                    <img src="{{ Storage::url($blog->image_path) }}" alt="{{ $blog->title }}" class="w-full h-auto">
                </div>
            @endif

            <div class="prose prose-lg dark:prose-invert mx-auto">
                {!! nl2br(e($blog->content)) !!}
            </div>
        </div>
    </article>
@endsection
