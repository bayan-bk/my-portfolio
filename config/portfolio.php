<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Profile Information
    |--------------------------------------------------------------------------
    */
    'profile' => [
        'name' => 'Bayan K',
        'role' => 'Flutter Developer',
        'location' => 'Othayi, Malappuram, Kerala, India',
        'email' => 'bayanbinaboobacker@gmail.com',
        'phone' => '+91-9567348351',
        'experience_years' => '2',
        'about' => 'Flutter Developer with 2+ years of experience independently delivering enterprise Flutter apps across HRMS, B2B field sales, service management, and food delivery. Strong in Clean Architecture, offline-first systems, geofencing security, and Play Store / App Store release management.',
        'avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=500&fit=crop&crop=face',
        'resume_url' => null, // Add your resume URL here
        'social' => [
            'github' => 'https://github.com/bayan-k',
            'linkedin' => 'https://linkedin.com/in/bayan-k',
            'twitter' => 'https://twitter.com/bayan_dev',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Skills
    |--------------------------------------------------------------------------
    */
    'skills' => [
        'Languages' => [
            ['name' => 'Dart', 'proficiency' => 95],
            ['name' => 'C', 'proficiency' => 75],
            ['name' => 'Python', 'proficiency' => 70],
        ],
        'Frameworks' => [
            ['name' => 'Flutter', 'proficiency' => 95],
            ['name' => 'Laravel', 'proficiency' => 60],
        ],
        'State Management' => [
            ['name' => 'Provider', 'proficiency' => 90],
            ['name' => 'Bloc', 'proficiency' => 85],
            ['name' => 'Riverpod', 'proficiency' => 88],
            ['name' => 'GetX', 'proficiency' => 92],
        ],
        'Backend & APIs' => [
            ['name' => 'REST APIs', 'proficiency' => 90],
            ['name' => 'Firebase', 'proficiency' => 85],
            ['name' => 'Supabase', 'proficiency' => 80],
            ['name' => 'MQTT', 'proficiency' => 75],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Work Experience
    |--------------------------------------------------------------------------
    */
    'experiences' => [
        [
            'company' => 'Dfine Digital Solutions',
            'role' => 'Flutter Developer',
            'start_date' => 'Jan 2024',
            'end_date' => 'Present',
            'description' => "• Owned Flutter core features using clean architecture\n• Improved startup performance by 40% (5s → 3s)\n• Debugged production crashes\n• Collaborated with backend and QA teams",
        ],
        [
            'company' => 'Chegg Expert',
            'role' => 'Subject Matter Expert',
            'start_date' => 'Jan 2023',
            'end_date' => 'Present',
            'description' => "• Delivered CS solutions\n• Technical mentoring\n• Problem-solving focused role",
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Projects
    |--------------------------------------------------------------------------
    */
    'projects' => [
        [
            'slug' => 'finkey-hrms',
            'title' => 'Finkey — Enterprise HRMS Mobile App',
            'brief_description' => 'Enterprise HRMS with Attendance, Access Control, and Analytics.',
            'full_description' => "A comprehensive enterprise HRMS mobile application built with Flutter.\n\nKey Features:\n• Attendance Management with biometric integration\n• Access Control with RBAC system\n• Performance Analytics with real-time dashboards\n• 50+ modules for complete HR operations\n• Offline-first sync for seamless experience\n• GPS Geofencing using Haversine formula\n\nThis project demonstrates my ability to architect and deliver large-scale enterprise applications with complex business logic and offline-first capabilities.",
            'technologies' => ['Flutter', 'Clean Architecture', 'Offline-first', 'GPS', 'Biometrics', 'REST API'],
            'image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop',
            'live_url' => 'https://finkey.app',
            'github_url' => 'https://github.com/bayan-k/finkey',
            'featured' => true,
        ],
        [
            'slug' => 'kaaly-sales',
            'title' => 'Kaaly — Sales Order App',
            'brief_description' => 'Offline-first Sales Order App with Barcode scanning and PDF invoicing.',
            'full_description' => "A powerful sales order management application designed for field sales teams.\n\nKey Features:\n• Offline-first architecture with cloud sync\n• Barcode scanning for quick product lookup\n• PDF invoice generation\n• Real-time inventory updates\n• Customer management system\n• Sales analytics and reporting\n\nBuilt with Riverpod for state management and ObjectBox for local database, ensuring blazing fast performance even offline.",
            'technologies' => ['Flutter', 'Riverpod', 'ObjectBox', 'PDF Generation', 'Barcode Scanner'],
            'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=600&h=400&fit=crop',
            'live_url' => null,
            'github_url' => 'https://github.com/bayan-k/kaaly',
            'featured' => true,
        ],
        [
            'slug' => 'comtro',
            'title' => 'Comtro Real-time Communication App',
            'brief_description' => 'Real-time IoT communication app using MQTT protocol.',
            'full_description' => "A real-time communication application for IoT device management.\n\nKey Features:\n• MQTT real-time communication\n• Auto reconnect with exponential backoff\n• MVVM architecture with GetX\n• Offline support with GetStorage\n• Responsive adaptive UI\n• Device pairing and management\n\nThis project showcases my expertise in real-time communication protocols and reactive state management.",
            'technologies' => ['Flutter', 'MQTT', 'GetX', 'MVVM', 'IoT', 'WebSocket'],
            'image' => 'https://images.unsplash.com/photo-1555774698-0b77e0d5fac6?w=600&h=400&fit=crop',
            'live_url' => null,
            'github_url' => 'https://github.com/bayan-k/comtro',
            'featured' => true,
        ],
        [
            'slug' => 'dhb-food',
            'title' => 'DHB Food Delivery Platform',
            'brief_description' => 'Multi-app food delivery ecosystem with real-time tracking.',
            'full_description' => "A complete food delivery platform with multiple interconnected applications.\n\nApps in Ecosystem:\n• Customer App - Browse, order, and track\n• Restaurant App - Manage orders and menu\n• Rider App - Delivery management and navigation\n\nKey Features:\n• Real-time order tracking\n• Shared API layer across all apps\n• UI consistency with design system\n• Push notifications\n• Payment integration\n• Rating and review system",
            'technologies' => ['Flutter', 'Real-time', 'Firebase', 'Google Maps', 'Stripe'],
            'image' => 'https://images.unsplash.com/photo-1526498460520-4c246339dccb?w=600&h=400&fit=crop',
            'live_url' => 'https://dhb-food.app',
            'github_url' => null,
            'featured' => false,
        ],
        [
            'slug' => 'taskflow',
            'title' => 'TaskFlow — Project Management Tool',
            'brief_description' => 'Collaborative project management with Kanban boards and team chat.',
            'full_description' => "A modern project management application for teams.\n\nKey Features:\n• Kanban board with drag-and-drop\n• Team collaboration and chat\n• Task assignments and deadlines\n• File attachments and comments\n• Analytics and reporting\n• Calendar integration",
            'technologies' => ['Flutter', 'Bloc', 'Supabase', 'Realtime DB', 'File Upload'],
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop',
            'live_url' => null,
            'github_url' => 'https://github.com/bayan-k/taskflow',
            'featured' => false,
        ],
        [
            'slug' => 'cryptowatch',
            'title' => 'CryptoWatch — Cryptocurrency Tracker',
            'brief_description' => 'Real-time cryptocurrency tracking with portfolio management.',
            'full_description' => "A cryptocurrency tracking and portfolio management application.\n\nKey Features:\n• Real-time price updates\n• Portfolio tracking and P&L\n• Price alerts and notifications\n• Historical charts and analytics\n• Watchlist management\n• News aggregation",
            'technologies' => ['Flutter', 'REST API', 'Charts', 'Provider', 'Notifications'],
            'image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop',
            'live_url' => null,
            'github_url' => 'https://github.com/bayan-k/cryptowatch',
            'featured' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Education
    |--------------------------------------------------------------------------
    */
    'education' => [
        [
            'institution' => 'College of Engineering Trivandrum (CET)',
            'degree' => 'Bachelor of Technology in Computer Science',
            'start_year' => '2019',
            'end_year' => '2023',
            'description' => 'Graduated with focus on software development, data structures, algorithms, and mobile application development.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Certifications
    |--------------------------------------------------------------------------
    */
    'certificates' => [
        [
            'name' => 'Google Flutter & Dart Complete Course',
            'issuer' => 'The Digital Adda',
            'date' => 'Mar 2024',
            'url' => 'https://certificate.example.com/flutter-dart',
        ],
        [
            'name' => 'Clean Architecture in Flutter',
            'issuer' => 'Udemy',
            'date' => 'Jun 2024',
            'url' => 'https://udemy.com/certificate/clean-arch',
        ],
        [
            'name' => 'Firebase for Flutter Developers',
            'issuer' => 'Google',
            'date' => 'Jan 2024',
            'url' => 'https://google.com/certificate/firebase',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Services
    |--------------------------------------------------------------------------
    */
    'services' => [
        [
            'title' => 'Mobile App Development',
            'description' => 'End-to-end Flutter app development with clean architecture, offline-first design, and optimal performance.',
            'icon' => 'mobile',
        ],
        [
            'title' => 'UI/UX Implementation',
            'description' => 'Pixel-perfect implementation of Figma/Adobe XD designs with smooth animations and responsive layouts.',
            'icon' => 'design',
        ],
        [
            'title' => 'API Integration',
            'description' => 'Seamless REST API, GraphQL, and Firebase integration with proper error handling and caching.',
            'icon' => 'api',
        ],
        [
            'title' => 'App Optimization',
            'description' => 'Performance auditing, startup optimization, and memory management for existing Flutter apps.',
            'icon' => 'speed',
        ],
        [
            'title' => 'Code Review & Consulting',
            'description' => 'Architecture review, best practices consulting, and technical mentorship for Flutter teams.',
            'icon' => 'code',
        ],
        [
            'title' => 'App Maintenance',
            'description' => 'Ongoing maintenance, bug fixes, feature updates, and App Store/Play Store release management.',
            'icon' => 'maintenance',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Testimonials
    |--------------------------------------------------------------------------
    */
    'testimonials' => [
        [
            'name' => 'Ahmed Khan',
            'role' => 'CTO',
            'company' => 'Dfine Digital Solutions',
            'content' => 'Bayan is an exceptional Flutter developer. His attention to detail and ability to deliver complex features on time is remarkable. The HRMS app he built handles 50+ modules flawlessly.',
            'avatar' => 'https://i.pravatar.cc/100?img=11',
        ],
        [
            'name' => 'Sarah Mitchell',
            'role' => 'Product Manager',
            'company' => 'TechStart',
            'content' => 'Working with Bayan was a pleasure. He understood our requirements perfectly and delivered a polished, performant app that our users love. Highly recommend!',
            'avatar' => 'https://i.pravatar.cc/100?img=5',
        ],
        [
            'name' => 'Rahul Sharma',
            'role' => 'Founder',
            'company' => 'DHB Foods',
            'content' => 'The food delivery platform Bayan built for us exceeded expectations. The real-time tracking and multi-app ecosystem work seamlessly. Great communication throughout.',
            'avatar' => 'https://i.pravatar.cc/100?img=12',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | SEO Settings
    |--------------------------------------------------------------------------
    */
    'seo' => [
        'title' => 'Bayan K - Flutter Developer Portfolio',
        'description' => 'Flutter Developer with 2+ years of experience building production-grade enterprise mobile applications. Specialized in offline-first architecture, geofencing security, and Clean Architecture across Android and iOS.',
        'keywords' => 'Flutter Developer, Mobile App Developer, Dart, iOS, Android, Cross-platform, Kerala, India',
        'author' => 'Bayan K',
    ],

    /*
    |--------------------------------------------------------------------------
    | Site Settings
    |--------------------------------------------------------------------------
    */
    'site' => [
        'name' => 'Bayan.dev',
        'tagline' => 'Flutter Developer',
        'footer_text' => 'Crafting pixel-perfect digital experiences with clean code, modern design, and meticulous attention to detail.',
    ],
];
