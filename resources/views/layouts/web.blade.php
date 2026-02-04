<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Bayan K - Flutter Developer')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-50 text-gray-900 dark:bg-gray-950 dark:text-gray-100 transition-colors duration-300 antialiased"
    x-data="{
        darkMode: localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches),
        toggleTheme() {
            this.darkMode = !this.darkMode;
            localStorage.setItem('theme', this.darkMode ? 'dark' : 'light');
            if (this.darkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }" x-init="$watch('darkMode', val => val ? document.documentElement.classList.add('dark') : document.documentElement.classList.remove('dark'));
    if (darkMode) document.documentElement.classList.add('dark');">

    <!-- Navigation -->
    <nav
        class="fixed w-full z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('home') }}"
                        class="text-2xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600 hover:opacity-80 transition">
                        Bayan.dev
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center font-medium">
                    <a href="{{ route('home') }}"
                        class="hover:text-blue-600 dark:hover:text-blue-400 transition {{ request()->routeIs('home') ? 'text-blue-600 dark:text-blue-400' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="hover:text-blue-600 dark:hover:text-blue-400 transition {{ request()->routeIs('about') ? 'text-blue-600 dark:text-blue-400' : '' }}">About</a>
                    <a href="{{ route('projects.index') }}"
                        class="hover:text-blue-600 dark:hover:text-blue-400 transition {{ request()->routeIs('projects*') ? 'text-blue-600 dark:text-blue-400' : '' }}">Projects</a>
                    <!-- <a href="{{ route('blog.index') }}" class="hover:text-blue-600 dark:hover:text-blue-400 transition">Blog</a> -->
                    <a href="{{ route('contact') }}"
                        class="px-5 py-2.5 bg-blue-600 text-white rounded-full hover:bg-blue-700 transition shadow-lg shadow-blue-500/30 transform hover:-translate-y-0.5">Contact
                        Me</a>

                    <!-- Theme Toggle -->
                    <button @click="toggleTheme()"
                        class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 transition focus:outline-none">
                        <svg x-show="!darkMode" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                        <svg x-show="darkMode" class="w-6 h-6 text-yellow-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center" x-data="{ open: false }">
                    <button @click="open = !open"
                        class="text-gray-600 dark:text-gray-300 hover:text-gray-900 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <!-- Mobile Dropdown -->
                    <div x-show="open" @click.away="open = false"
                        class="absolute top-20 right-4 w-48 bg-white dark:bg-gray-800 rounded-lg shadow-xl py-2 flex flex-col border border-gray-100 dark:border-gray-700">
                        <a href="{{ route('home') }}"
                            class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Home</a>
                        <a href="{{ route('about') }}"
                            class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">About</a>
                        <a href="{{ route('projects.index') }}"
                            class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Projects</a>
                        <a href="{{ route('contact') }}"
                            class="px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-700">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main class="pt-20 min-h-screen flex flex-col">
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-800 py-10 mt-auto">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3
                class="text-xl font-bold bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600 mb-4">
                Bayan K</h3>
            <p class="text-gray-500 dark:text-gray-400 mb-6">Building digital experiences with Flutter & Laravel.</p>
            <div class="flex justify-center space-x-6 mb-6">
                <!-- Social Icons -->
                <a href="#" class="text-gray-400 hover:text-blue-600 transition"><span
                        class="sr-only">GitHub</span>GitHub</a>
                <a href="#" class="text-gray-400 hover:text-blue-600 transition"><span
                        class="sr-only">LinkedIn</span>LinkedIn</a>
                <a href="#" class="text-gray-400 hover:text-blue-600 transition"><span
                        class="sr-only">Twitter</span>Twitter</a>
            </div>
            <p class="text-sm text-gray-500 dark:text-gray-600">&copy; {{ date('Y') }} Bayan K. All rights
                reserved.</p>
        </div>
    </footer>
</body>

</html>
