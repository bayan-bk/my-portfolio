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
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
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
        class="fixed w-full z-50 transition-all duration-500">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="group flex items-center space-x-3">
                    <div
                        class="w-10 h-10 rounded-xl bg-gradient-to-br from-[#C9B037] to-[#9A8420] flex items-center justify-center text-[#0A0A0A] font-bold text-lg shadow-lg group-hover:scale-105 transition-transform duration-300">
                        B
                    </div>
                    <span class="text-xl font-bold font-heading text-white">
                        Bayan<span class="text-[#C9B037]">.dev</span>
                    </span>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-2">
                    <div
                        class="flex items-center bg-[#111111]/50 backdrop-blur-sm rounded-full p-1.5 border border-[#2A2A2A]">
                        @foreach ([['route' => 'home', 'label' => 'Home'], ['route' => 'about', 'label' => 'About'], ['route' => 'projects.index', 'label' => 'Projects']] as $item)
                            <a href="{{ route($item['route']) }}"
                                class="nav-link px-5 py-2 rounded-full text-sm font-medium transition-all duration-300
                            {{ request()->routeIs($item['route'] . '*') ? 'bg-[#C9B037]/10 text-[#C9B037] border border-[#C9B037]/30' : 'text-[#888888] hover:text-white' }}">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </div>

                    <a href="{{ route('contact') }}"
                        class="ml-4 px-6 py-2.5 btn-gold rounded-full text-sm font-medium magnetic-btn ripple">
                        Let's Talk
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white p-2 focus:outline-none">
                    <div class="w-6 h-5 relative flex flex-col justify-between">
                        <span :class="mobileMenuOpen ? 'rotate-45 translate-y-2 bg-[#C9B037]' : 'bg-white'"
                            class="w-full h-0.5 transform transition-all duration-300 origin-center"></span>
                        <span :class="mobileMenuOpen ? 'opacity-0' : 'opacity-100'"
                            class="w-full h-0.5 bg-white transition-opacity duration-300"></span>
                        <span :class="mobileMenuOpen ? '-rotate-45 -translate-y-2 bg-[#C9B037]' : 'bg-white'"
                            class="w-full h-0.5 transform transition-all duration-300 origin-center"></span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="absolute top-full left-0 w-full bg-[#0A0A0A]/95 backdrop-blur-xl border-t border-[#2A2A2A] md:hidden">
            <div class="px-6 py-8 space-y-4">
                <a href="{{ route('home') }}"
                    class="block text-lg font-medium text-white hover:text-[#C9B037] py-2 border-b border-[#2A2A2A]">Home</a>
                <a href="{{ route('about') }}"
                    class="block text-lg font-medium text-white hover:text-[#C9B037] py-2 border-b border-[#2A2A2A]">About</a>
                <a href="{{ route('projects.index') }}"
                    class="block text-lg font-medium text-white hover:text-[#C9B037] py-2 border-b border-[#2A2A2A]">Projects</a>
                <a href="{{ route('contact') }}"
                    class="block w-full text-center py-3 btn-gold rounded-xl font-medium mt-4">Contact Me</a>
            </div>
        </div>
    </nav>

    <main class="relative z-10 min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="relative z-10 bg-[#0A0A0A] border-t border-[#2A2A2A] pt-20 pb-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
                <div class="md:col-span-2">
                    <span class="text-2xl font-bold font-heading text-white mb-4 block">
                        Bayan<span class="text-[#C9B037]">.dev</span>
                    </span>
                    <p class="text-[#888888] mb-8 max-w-md leading-relaxed">
                        Crafting pixel-perfect digital experiences with clean code, modern design, and meticulous
                        attention to detail.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-[#161616] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-[#161616] border border-[#2A2A2A] flex items-center justify-center text-[#888888] hover:text-[#C9B037] hover:border-[#C9B037]/50 transition-all duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-6 text-sm uppercase tracking-wider">Navigation</h4>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors">Home</a></li>
                        <li><a href="{{ route('about') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors">About</a></li>
                        <li><a href="{{ route('projects.index') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors">Projects</a></li>
                        <li><a href="{{ route('contact') }}"
                                class="text-[#888888] hover:text-[#C9B037] transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-6 text-sm uppercase tracking-wider">Get in Touch</h4>
                    <p class="text-[#888888] mb-2">Have a project in mind?</p>
                    <a href="mailto:hello@bayan.dev"
                        class="text-[#C9B037] font-medium hover:text-[#E5D68A] transition-colors">hello@bayan.dev</a>
                </div>
            </div>
            <div class="border-t border-[#2A2A2A] pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-[#888888] mb-4 md:mb-0">&copy; {{ date('Y') }} Bayan K. All rights reserved.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-sm text-[#888888] hover:text-[#C9B037] transition-colors">Privacy</a>
                    <a href="#" class="text-sm text-[#888888] hover:text-[#C9B037] transition-colors">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- GSAP Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <script>
        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Check for reduced motion preference
        const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (!prefersReducedMotion) {
            // Navbar Animation
            gsap.from('#navbar', {
                y: -100,
                opacity: 0,
                duration: 1,
                ease: 'power3.out',
                delay: 0.2
            });

            // Reveal Animations
            gsap.utils.toArray('.reveal').forEach((elem) => {
                gsap.fromTo(elem, {
                    y: 60,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                });
            });

            gsap.utils.toArray('.reveal-left').forEach((elem) => {
                gsap.fromTo(elem, {
                    x: -60,
                    opacity: 0
                }, {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                });
            });

            gsap.utils.toArray('.reveal-right').forEach((elem) => {
                gsap.fromTo(elem, {
                    x: 60,
                    opacity: 0
                }, {
                    x: 0,
                    opacity: 1,
                    duration: 1,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                });
            });

            gsap.utils.toArray('.reveal-scale').forEach((elem) => {
                gsap.fromTo(elem, {
                    scale: 0.9,
                    opacity: 0
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                });
            });

            // Stagger animations for grids
            gsap.utils.toArray('.stagger-grid').forEach((grid) => {
                const items = grid.querySelectorAll('.stagger-item');
                gsap.fromTo(items, {
                    y: 40,
                    opacity: 0
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 0.8,
                    stagger: 0.15,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: grid,
                        start: 'top 80%',
                        toggleActions: 'play none none none'
                    }
                });
            });

            // Skill bar animations
            gsap.utils.toArray('.skill-bar-fill').forEach((bar) => {
                gsap.to(bar, {
                    scaleX: 1,
                    duration: 1.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: bar,
                        start: 'top 90%',
                        toggleActions: 'play none none none'
                    }
                });
            });

            // Timeline line animation
            gsap.utils.toArray('.timeline-container').forEach((timeline) => {
                const line = timeline.querySelector('.timeline-line');
                if (line) {
                    gsap.to(line, {
                        height: '100%',
                        duration: 2,
                        ease: 'power2.out',
                        scrollTrigger: {
                            trigger: timeline,
                            start: 'top 70%',
                            end: 'bottom 30%',
                            scrub: 1
                        }
                    });
                }
            });

            // Magnetic button effect
            document.querySelectorAll('.magnetic-btn').forEach((btn) => {
                btn.addEventListener('mousemove', (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    gsap.to(btn, {
                        x: x * 0.3,
                        y: y * 0.3,
                        duration: 0.3,
                        ease: 'power2.out'
                    });
                });

                btn.addEventListener('mouseleave', () => {
                    gsap.to(btn, {
                        x: 0,
                        y: 0,
                        duration: 0.5,
                        ease: 'elastic.out(1, 0.5)'
                    });
                });
            });

            // 3D Tilt Effect for Cards
            document.querySelectorAll('.tilt-card').forEach((card) => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const rotateX = (y - centerY) / 20;
                    const rotateY = (centerX - x) / 20;

                    gsap.to(card, {
                        rotateX: rotateX,
                        rotateY: rotateY,
                        duration: 0.3,
                        ease: 'power2.out',
                        transformPerspective: 1000
                    });
                });

                card.addEventListener('mouseleave', () => {
                    gsap.to(card, {
                        rotateX: 0,
                        rotateY: 0,
                        duration: 0.5,
                        ease: 'power2.out'
                    });
                });
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: target,
                        ease: 'power3.inOut'
                    });
                }
            });
        });
    </script>
</body>

</html>
