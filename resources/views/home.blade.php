@extends('layouts.web')

@section('content')
    <!-- Hero Section -->
    <section
        class="relative bg-gradient-to-br from-blue-50 to-indigo-100 dark:from-gray-900 dark:to-gray-800 min-h-[90vh] flex items-center justify-center overflow-hidden">
        <div
            class="absolute inset-0 bg-grid-slate-200/50 dark:bg-grid-slate-800/20 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))] dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.05))]">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left space-y-6 animate-fade-in-up">
                    <div
                        class="inline-flex items-center px-3 py-1 rounded-full border border-blue-200 bg-blue-50 dark:bg-blue-900/30 dark:border-blue-800 text-blue-600 dark:text-blue-300 text-sm font-medium">
                        <span class="flex h-2 w-2 rounded-full bg-blue-600 mr-2 animate-pulse"></span>
                        Available for Freelance Projects
                    </div>
                    <h1
                        class="text-5xl md:text-7xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-gray-600 dark:from-white dark:to-gray-300 leading-tight">
                        Hi, I'm <br>
                        <span class="text-blue-600 dark:text-blue-400">{{ $profile->name ?? 'Developer' }}</span>
                    </h1>
                    <p class="text-xl md:text-2xl text-gray-600 dark:text-gray-300 font-light h-8" x-data="{
                        text: '',
                        textArray: ['Flutter Developer', 'UI/UX Enthusiast', 'Problem Solver'],
                        textIndex: 0,
                        charIndex: 0,
                        typeSpeed: 100,
                        cursorSpeed: 550,
                        pauseEnd: 2000,
                        pauseStart: 20,
                        direction: 'forward',
                        init() {
                            let that = this;
                            setInterval(function() {
                                if (that.direction == 'forward') {
                                    that.text = that.textArray[that.textIndex].substring(0, that.charIndex);
                                    that.charIndex++;
                                    if (that.charIndex > that.textArray[that.textIndex].length) {
                                        that.direction = 'backward';
                                        clearInterval(that.typeInterval);
                                        setTimeout(function() {
                                            that.typeInterval = setInterval(function() { that.type(); }, that.typeSpeed);
                                        }, that.pauseEnd);
                                    }
                                } else {
                                    that.text = that.textArray[that.textIndex].substring(0, that.charIndex);
                                    that.charIndex--;
                                    if (that.charIndex < 0) {
                                        that.direction = 'forward';
                                        that.textIndex++;
                                        if (that.textIndex >= that.textArray.length) that.textIndex = 0;
                                        clearInterval(that.typeInterval);
                                        setTimeout(function() {
                                            that.typeInterval = setInterval(function() { that.type(); }, that.typeSpeed);
                                        }, that.pauseStart);
                                    }
                                }
                            }, this.typeSpeed);
                        },
                    }">
                        I am a <span class="font-semibold text-gray-800 dark:text-white" x-text="text"></span><span
                            class="animate-pulse">|</span>
                    </p>
                    <p class="text-lg text-gray-600 dark:text-gray-400 max-w-lg mx-auto md:mx-0">
                        {{ \Illuminate\Support\Str::limit($profile->about ?? 'Building beatiful apps.', 150) }}
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                        <a href="#projects"
                            class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl shadow-lg shadow-blue-500/30 transition transform hover:-translate-y-1 font-semibold text-lg flex items-center justify-center">
                            View My Work
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </a>
                        <a href="{{ route('contact') }}"
                            class="px-8 py-4 bg-white dark:bg-gray-800 text-gray-800 dark:text-white border border-gray-200 dark:border-gray-700 rounded-xl hover:shadow-lg transition transform hover:-translate-y-1 font-semibold text-lg flex items-center justify-center">
                            Contact Me
                        </a>
                    </div>
                </div>
                <div class="relative hidden md:block animate-fade-in">
                    <!-- Check if avatar exists, else placeholder -->
                    @if ($profile && $profile->avatar_path)
                        <img src="{{ Storage::url($profile->avatar_path) }}" alt="Profile"
                            class="w-96 h-96 object-cover rounded-full shadow-2xl border-4 border-white dark:border-gray-800 mx-auto relative z-10">
                    @else
                        <div
                            class="w-96 h-96 bg-gradient-to-tr from-blue-500 to-purple-600 rounded-full shadow-2xl border-4 border-white dark:border-gray-800 mx-auto relative z-10 flex items-center justify-center text-white text-9xl font-bold">
                            {{ substr($profile->name ?? 'U', 0, 1) }}
                        </div>
                    @endif
                    <!-- Decorative elements -->
                    <div
                        class="absolute top-0 right-10 w-24 h-24 bg-yellow-400/20 backdrop-blur-xl rounded-2xl -rotate-12 animate-float">
                    </div>
                    <div
                        class="absolute bottom-10 left-10 w-32 h-32 bg-purple-500/20 backdrop-blur-xl rounded-full animate-float-delayed">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-20 bg-white dark:bg-gray-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Technical Skills</h2>
                <div class="w-20 h-1 bg-blue-600 mx-auto rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($skills as $category => $categorySkills)
                    <div
                        class="bg-gray-50 dark:bg-gray-900 rounded-2xl p-8 hover:shadow-xl transition duration-300 border border-gray-100 dark:border-gray-800">
                        <h3
                            class="text-xl font-bold text-gray-800 dark:text-gray-200 mb-6 border-b border-gray-200 dark:border-gray-700 pb-2">
                            {{ $category }}</h3>
                        <div class="space-y-4">
                            @foreach ($categorySkills as $skill)
                                <div class="group">
                                    <div class="flex justify-between mb-1">
                                        <span
                                            class="text-gray-700 dark:text-gray-400 font-medium">{{ $skill->name }}</span>
                                        <span
                                            class="text-blue-600 dark:text-blue-400 text-sm">{{ $skill->proficiency }}%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 dark:bg-gray-700 rounded-full h-2.5 overflow-hidden">
                                        <div class="bg-blue-600 h-2.5 rounded-full transition-all duration-1000 ease-out group-hover:bg-blue-500"
                                            style="width: {{ $skill->proficiency }}%"></div>
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
    <section id="projects" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 dark:text-white mb-4">Featured Projects</h2>
                    <div class="w-20 h-1 bg-blue-600 rounded-full"></div>
                </div>
                <a href="{{ route('projects.index') }}"
                    class="hidden md:flex items-center text-blue-600 dark:text-blue-400 font-semibold hover:text-blue-700 transition">
                    View All Projects <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                        </path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($featuredProjects as $project)
                    <a href="{{ route('projects.show', $project) }}"
                        class="group block bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 dark:border-gray-700">
                        <div class="relative h-60 overflow-hidden">
                            @if ($project->image_path)
                                <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500">
                            @else
                                <div
                                    class="w-full h-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center text-gray-400">
                                    <span class="text-4xl font-bold opacity-30">{{ substr($project->title, 0, 1) }}</span>
                                </div>
                            @endif
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex items-end p-6">
                                <span class="text-white font-medium">View Details &rarr;</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3
                                class="text-xl font-bold text-gray-900 dark:text-white mb-2 group-hover:text-blue-600 transition">
                                {{ $project->title }}</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm line-clamp-2 mb-4">
                                {{ $project->brief_description }}</p>
                            <div class="flex flex-wrap gap-2">
                                @if (is_array($project->technologies))
                                    @foreach (array_slice($project->technologies, 0, 3) as $tech)
                                        <span
                                            class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded-full text-xs font-medium">{{ $tech }}</span>
                                    @endforeach
                                    @if (count($project->technologies) > 3)
                                        <span
                                            class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-gray-500 text-xs font-medium">+{{ count($project->technologies) - 3 }}</span>
                                    @endif
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-12 text-center md:hidden">
                <a href="{{ route('projects.index') }}"
                    class="inline-flex items-center px-6 py-3 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg text-gray-700 dark:text-gray-300 font-medium hover:bg-gray-50 dark:hover:bg-gray-700 transition">
                    View All Projects
                </a>
            </div>
        </div>
    </section>
@endsection
