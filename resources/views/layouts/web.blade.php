<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', config('portfolio.seo.title', 'Bayan K - Flutter Developer'))</title>
    <meta name="description" content="{{ config('portfolio.seo.description') }}">
    <meta name="keywords" content="{{ config('portfolio.seo.keywords') }}">
    <meta name="author" content="{{ config('portfolio.seo.author') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml"
        href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>💻</text></svg>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="noise-overlay bg-[#0A0A0A] text-white antialiased" x-data="{
    scrolled: false,
    mobileMenuOpen: false,
}" x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 });">

    <!-- Ambient Background Gradients (Gold) -->
    <div class="fixed inset-0 z-0 pointer-events-none overflow-hidden">
        <div
            class="absolute top-[-20%] left-[-10%] w-[50%] h-[50%] bg-[#C9B037]/[0.03] rounded-full blur-[150px] animate-pulse-gold">
        </div>
        <div
            class="absolute bottom-[-20%] right-[-10%] w-[40%] h-[40%] bg-[#C9B037]/[0.02] rounded-full blur-[120px] animate-pulse-gold animation-delay-200">
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navbar" :class="{ 'glass-nav': scrolled, 'bg-transparent': !scrolled }"
        class="fixed w-full z-[100] transition-all duration-500">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16 sm:h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="group flex items-center space-x-2 sm:space-x-3">
                    <div
                        class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-gradient-to-br from-[#C9B037] to-[#9A8420] flex items-center justify-center text-[#0A0A0A] font-bold text-base sm:text-lg shadow-lg group-hover:scale-105 transition-transform duration-300">
                        B
                    </div>
                    <span class="text-lg sm:text-xl font-bold font-heading text-white">
                        Bayan<span class="text-[#C9B037]">.dev</span>
                    </span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                    <a href="{{ route('home') }}"
                        class="nav-link px-3 lg:px-4 py-2 text-sm lg:text-base text-[#888888] hover:text-white transition-colors {{ request()->routeIs('home') ? 'text-white' : '' }}">Home</a>
                    <a href="{{ route('about') }}"
                        class="nav-link px-3 lg:px-4 py-2 text-sm lg:text-base text-[#888888] hover:text-white transition-colors {{ request()->routeIs('about') ? 'text-white' : '' }}">About</a>
                    <a href="{{ route('projects.index') }}"
                        class="nav-link px-3 lg:px-4 py-2 text-sm lg:text-base text-[#888888] hover:text-white transition-colors {{ request()->routeIs('projects.*') ? 'text-white' : '' }}">Projects</a>
                    <a href="{{ route('contact') }}"
                        class="nav-link px-3 lg:px-4 py-2 text-sm lg:text-base text-[#888888] hover:text-white transition-colors {{ request()->routeIs('contact') ? 'text-white' : '' }}">Contact</a>
                </div>

                <!-- CTA Button -->
                <div class="hidden md:block">
                    <a href="{{ route('contact') }}"
                        class="px-4 lg:px-6 py-2 lg:py-2.5 btn-gold rounded-lg lg:rounded-xl font-semibold text-sm transition-all magnetic-btn">
                        Hire Me
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen"
                    class="md:hidden w-10 h-10 flex items-center justify-center text-white">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-cloak x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="md:hidden bg-[#0A0A0A]/95 backdrop-blur-xl border-t border-[#2A2A2A]">
            <div class="max-w-7xl mx-auto px-4 py-4 space-y-1">
                <a href="{{ route('home') }}"
                    class="block px-4 py-3 rounded-xl text-[#888888] hover:text-white hover:bg-[#111111] transition-colors {{ request()->routeIs('home') ? 'text-white bg-[#111111]' : '' }}">Home</a>
                <a href="{{ route('about') }}"
                    class="block px-4 py-3 rounded-xl text-[#888888] hover:text-white hover:bg-[#111111] transition-colors {{ request()->routeIs('about') ? 'text-white bg-[#111111]' : '' }}">About</a>
                <a href="{{ route('projects.index') }}"
                    class="block px-4 py-3 rounded-xl text-[#888888] hover:text-white hover:bg-[#111111] transition-colors {{ request()->routeIs('projects.*') ? 'text-white bg-[#111111]' : '' }}">Projects</a>
                <a href="{{ route('contact') }}"
                    class="block px-4 py-3 rounded-xl text-[#888888] hover:text-white hover:bg-[#111111] transition-colors {{ request()->routeIs('contact') ? 'text-white bg-[#111111]' : '' }}">Contact</a>
                <div class="pt-2">
                    <a href="{{ route('contact') }}"
                        class="block w-full text-center px-4 py-3 btn-gold rounded-xl font-semibold">Hire Me</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="relative z-10 min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 bg-[#0A0A0A] border-t border-[#2A2A2A] pt-12 sm:pt-16 lg:pt-20 pb-8 sm:pb-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 sm:gap-10 lg:gap-12 mb-10 sm:mb-12 lg:mb-16">
                <!-- Brand -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 sm:space-x-3 mb-4 sm:mb-6">
                        <div
                            class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg sm:rounded-xl bg-gradient-to-br from-[#C9B037] to-[#9A8420] flex items-center justify-center text-[#0A0A0A] font-bold text-base sm:text-lg">
                            B</div>
                        <span class="text-lg sm:text-xl font-bold font-heading text-white">Bayan<span
                                class="text-[#C9B037]">.dev</span></span>
                    </a>
                    <p class="text-[#888888] text-sm sm:text-base leading-relaxed">
                        {{ config('portfolio.site.footer_text') }}
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-bold mb-4 sm:mb-6 text-sm sm:text-base">Quick Links</h4>
                    <ul class="space-y-2 sm:space-y-3">
                        <li><a href="{{ route('home') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors text-sm sm:text-base">Home</a>
                        </li>
                        <li><a href="{{ route('about') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors text-sm sm:text-base">About</a>
                        </li>
                        <li><a href="{{ route('projects.index') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors text-sm sm:text-base">Projects</a>
                        </li>
                        <li><a href="{{ route('contact') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors text-sm sm:text-base">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-white font-bold mb-4 sm:mb-6 text-sm sm:text-base">Services</h4>
                    <ul class="space-y-2 sm:space-y-3">
                        <li><span class="text-[#888888] text-sm sm:text-base">Mobile App Development</span></li>
                        <li><span class="text-[#888888] text-sm sm:text-base">UI/UX Implementation</span></li>
                        <li><span class="text-[#888888] text-sm sm:text-base">API Integration</span></li>
                        <li><span class="text-[#888888] text-sm sm:text-base">App Optimization</span></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-bold mb-4 sm:mb-6 text-sm sm:text-base">Get in Touch</h4>
                    <ul class="space-y-2 sm:space-y-3">
                        <li class="flex items-center text-[#888888] text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 text-[#C9B037] flex-shrink-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="truncate">{{ config('portfolio.profile.email') }}</span>
                        </li>
                        <li class="flex items-center text-[#888888] text-sm sm:text-base">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5 mr-2 sm:mr-3 text-[#C9B037] flex-shrink-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <span class="truncate">{{ config('portfolio.profile.location') }}</span>
                        </li>
                    </ul>

                    <!-- Social Icons -->
                    <div class="flex space-x-3 mt-4 sm:mt-6">
                        @if (config('portfolio.profile.social.github'))
                            <a href="{{ config('portfolio.profile.social.github') }}" target="_blank"
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-[#111111] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        @endif
                        @if (config('portfolio.profile.social.linkedin'))
                            <a href="{{ config('portfolio.profile.social.linkedin') }}" target="_blank"
                                class="w-9 h-9 sm:w-10 sm:h-10 rounded-lg bg-[#111111] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all">
                                <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div
                class="pt-6 sm:pt-8 border-t border-[#2A2A2A] flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-[#888888] text-xs sm:text-sm text-center sm:text-left">
                    © {{ date('Y') }} {{ config('portfolio.profile.name') }}. All rights reserved.
                </p>
                <p class="text-[#888888] text-xs sm:text-sm flex items-center">
                    Built with <span class="text-[#C9B037] mx-1">♥</span> using Laravel & Flutter
                </p>
            </div>
        </div>
    </footer>

    <!-- GSAP Scroll Animations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            gsap.registerPlugin(ScrollTrigger);

            // Reveal animations
            gsap.utils.toArray('.reveal').forEach(elem => {
                gsap.fromTo(elem, {
                    y: 60,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: elem,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                });
            });

            // Reveal left animations
            gsap.utils.toArray('.reveal-left').forEach(elem => {
                gsap.fromTo(elem, {
                    x: -60,
                    opacity: 0
                }, {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: elem,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                });
            });

            // Reveal right animations
            gsap.utils.toArray('.reveal-right').forEach(elem => {
                gsap.fromTo(elem, {
                    x: 60,
                    opacity: 0
                }, {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: elem,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                });
            });

            // Stagger grid animations
            gsap.utils.toArray('.stagger-grid').forEach(grid => {
                gsap.fromTo(grid.querySelectorAll('.stagger-item'), {
                    y: 40,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: grid,
                        start: "top 85%",
                        toggleActions: "play none none none"
                    }
                });
            });
        });
    </script>

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</body>

</html>
