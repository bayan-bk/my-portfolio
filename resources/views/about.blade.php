@extends('layouts.web')

@section('title', 'About Me - Bayan K')

@section('content')
    <section class="py-20 bg-white dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- About Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <h1
                    class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-600 mb-6">
                    About Me</h1>
                <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto leading-relaxed">
                    {{ $profile->about }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Sidebar / Profile Card -->
                <div class="lg:col-span-1 space-y-8 animate-fade-in-left">
                    <div
                        class="bg-gray-50 dark:bg-gray-900 rounded-3xl p-8 border border-gray-100 dark:border-gray-800 shadow-xl relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition duration-500">
                        </div>

                        @if ($profile->avatar_path)
                            <img src="{{ Storage::url($profile->avatar_path) }}" alt="Profile"
                                class="w-48 h-48 rounded-full mx-auto object-cover shadow-2xl border-4 border-white dark:border-gray-800 mb-6 group-hover:scale-105 transition duration-500">
                        @else
                            <div
                                class="w-48 h-48 bg-gray-200 dark:bg-gray-800 rounded-full mx-auto flex items-center justify-center text-4xl font-bold text-gray-400 mb-6">
                                {{ substr($profile->name, 0, 1) }}
                            </div>
                        @endif

                        <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white mb-2">{{ $profile->name }}
                        </h2>
                        <p class="text-center text-blue-600 dark:text-blue-400 font-medium mb-6">{{ $profile->role }}</p>

                        <div class="space-y-4 text-gray-600 dark:text-gray-400">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                {{ $profile->location }}
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                {{ $profile->email }}
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-3 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                                {{ $profile->experience_years }} Exp.
                            </div>
                        </div>

                        <div class="mt-8 flex justify-center space-x-4">
                            @if ($profile->github)
                                <a href="{{ $profile->github }}" target="_blank"
                                    class="text-gray-400 hover:text-gray-900 dark:hover:text-white transition"><x-icon-github
                                        class="w-6 h-6" /></a>
                            @endif
                            @if ($profile->linkedin)
                                <a href="{{ $profile->linkedin }}" target="_blank"
                                    class="text-gray-400 hover:text-blue-600 transition"><x-icon-linkedin
                                        class="w-6 h-6" /></a>
                            @endif
                            @if ($profile->twitter)
                                <a href="{{ $profile->twitter }}" target="_blank"
                                    class="text-gray-400 hover:text-blue-400 transition"><x-icon-twitter
                                        class="w-6 h-6" /></a>
                            @endif
                        </div>
                    </div>

                    @if ($profile->resume_path)
                        <a href="{{ Storage::url($profile->resume_path) }}" target="_blank"
                            class="block w-full py-4 text-center bg-gray-900 dark:bg-white text-white dark:text-gray-900 rounded-2xl font-bold hover:shadow-lg hover:-translate-y-1 transition transform duration-300">
                            Download Resume
                        </a>
                    @endif
                </div>

                <!-- Main Content -->
                <div class="lg:col-span-2 space-y-16 animate-fade-in-right">

                    <!-- Experience -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 flex items-center">
                            <span class="bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 p-2 rounded-lg mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </span>
                            Work Experience
                        </h3>
                        <div class="space-y-12 border-l-2 border-gray-200 dark:border-gray-800 ml-3 pl-8 relative">
                            @foreach ($experiences as $exp)
                                <div class="relative group">
                                    <div
                                        class="absolute -left-[41px] top-0 w-6 h-6 bg-white dark:bg-gray-950 border-4 border-blue-600 rounded-full group-hover:scale-125 transition duration-300">
                                    </div>
                                    <div
                                        class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-sm border border-gray-100 dark:border-gray-800 hover:shadow-md transition">
                                        <div class="flex flex-col md:flex-row md:items-center justify-between mb-2">
                                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">{{ $exp->role }}
                                            </h4>
                                            <span
                                                class="text-sm font-medium text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/30 px-3 py-1 rounded-full w-fit mt-2 md:mt-0">
                                                {{ $exp->start_date->format('M Y') }} -
                                                {{ $exp->end_date ? $exp->end_date->format('M Y') : 'Present' }}
                                            </span>
                                        </div>
                                        <h5 class="text-lg text-gray-700 dark:text-gray-300 mb-4">{{ $exp->company }}</h5>
                                        <p class="text-gray-600 dark:text-gray-400 whitespace-pre-line">
                                            {{ $exp->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Education -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 flex items-center">
                            <span
                                class="bg-purple-100 dark:bg-purple-900 text-purple-600 dark:text-purple-300 p-2 rounded-lg mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14v5">
                                    </path>
                                </svg>
                            </span>
                            Education
                        </h3>
                        <div class="space-y-8">
                            @foreach ($education as $edu)
                                <div
                                    class="flex flex-col md:flex-row gap-6 items-start p-6 bg-gray-50 dark:bg-gray-900 rounded-2xl hover:bg-white dark:hover:bg-gray-800 transition hover:shadow-lg border border-transparent hover:border-gray-100 dark:hover:border-gray-700">
                                    <div class="bg-purple-100 dark:bg-purple-900/50 p-3 rounded-xl">
                                        <svg class="w-8 h-8 text-purple-600 dark:text-purple-300" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                            <path
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex flex-col sm:flex-row justify-between mb-2">
                                            <h4 class="text-lg font-bold text-gray-900 dark:text-white">
                                                {{ $edu->institution }}</h4>
                                            <span
                                                class="text-sm text-gray-500 dark:text-gray-400 font-medium whitespace-nowrap">{{ $edu->start_date->format('Y') }}
                                                - {{ $edu->end_date ? $edu->end_date->format('Y') : 'Present' }}</span>
                                        </div>
                                        <p class="text-purple-600 dark:text-purple-400 font-medium mb-2">
                                            {{ $edu->degree }}</p>
                                        <p class="text-gray-600 dark:text-gray-400 text-sm">{{ $edu->description }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Certificates -->
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-8 flex items-center">
                            <span
                                class="bg-yellow-100 dark:bg-yellow-900 text-yellow-600 dark:text-yellow-300 p-2 rounded-lg mr-4">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </span>
                            Certifications
                        </h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            @foreach ($certificates as $cert)
                                <div
                                    class="bg-gray-50 dark:bg-gray-900 p-6 rounded-2xl border border-gray-100 dark:border-gray-800 hover:shadow-md transition group">
                                    <div class="flex items-center justify-between mb-4">
                                        <span
                                            class="bg-yellow-50 dark:bg-yellow-900/30 text-yellow-600 dark:text-yellow-300 text-xs font-bold px-2 py-1 rounded">{{ $cert->date->format('M Y') }}</span>
                                        @if ($cert->url)
                                            <a href="{{ $cert->url }}" target="_blank"
                                                class="text-gray-400 group-hover:text-blue-600 transition">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14">
                                                    </path>
                                                </svg>
                                            </a>
                                        @endif
                                    </div>
                                    <h4 class="font-bold text-gray-900 dark:text-white mb-1">{{ $cert->name }}</h4>
                                    <p class="text-sm text-gray-500 dark:text-gray-400">{{ $cert->issuer }}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
