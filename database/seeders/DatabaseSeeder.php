<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Education;
use App\Models\Certificate;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create User
        $user = User::create([
            'name' => 'Bayan K',
            'email' => 'bayanbinaboobacker@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // 2. Create Profile
        Profile::create([
            'user_id' => $user->id,
            'name' => 'Bayan K',
            'role' => 'Flutter Developer',
            'location' => 'Othayi, Malappuram, Kerala, India',
            'email' => 'bayanbinaboobacker@gmail.com',
            'phone' => '+91-9567348351',
            'experience_years' => '1.5+',
            'about' => 'Flutter Developer with 1.5+ years of experience building production-grade mobile applications. Strong in clean architecture, offline-first systems, and performance optimization. Experienced in owning features end-to-end, debugging production issues, and delivering scalable Flutter solutions.',
            'github' => 'https://github.com/bayan-k',
            'linkedin' => 'https://linkedin.com/in/bayan-k',
            'twitter' => 'https://twitter.com/bayan_dev',
        ]);

        // 3. Skills
        $skills = [
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
        ];

        $sortOrder = 1;
        foreach ($skills as $category => $categorySkills) {
            foreach ($categorySkills as $skill) {
                Skill::create([
                    'name' => $skill['name'],
                    'category' => $category,
                    'proficiency' => $skill['proficiency'],
                    'sort_order' => $sortOrder++,
                ]);
            }
        }

        // 4. Experience
        Experience::create([
            'company' => 'Dfine Digital Solutions',
            'role' => 'Flutter Developer',
            'start_date' => '2024-01-01',
            'end_date' => null,
            'description' => "• Owned Flutter core features using clean architecture\n• Improved startup performance by 40% (5s → 3s)\n• Debugged production crashes\n• Collaborated with backend and QA teams",
            'sort_order' => 1,
        ]);
        Experience::create([
            'company' => 'Chegg Expert',
            'role' => 'Subject Matter Expert',
            'start_date' => '2023-01-01',
            'end_date' => null,
            'description' => "• Delivered CS solutions\n• Technical mentoring\n• Problem-solving focused role",
            'sort_order' => 2,
        ]);

        // 5. Projects with Placeholder Images
        $projects = [
            [
                'title' => 'Finkey — Enterprise HRMS Mobile App',
                'slug' => 'finkey-hrms',
                'brief_description' => 'Enterprise HRMS with Attendance, Access Control, and Analytics.',
                'full_description' => "A comprehensive enterprise HRMS mobile application built with Flutter.\n\nKey Features:\n• Attendance Management with biometric integration\n• Access Control with RBAC system\n• Performance Analytics with real-time dashboards\n• 50+ modules for complete HR operations\n• Offline-first sync for seamless experience\n• GPS Geofencing using Haversine formula\n\nThis project demonstrates my ability to architect and deliver large-scale enterprise applications with complex business logic and offline-first capabilities.",
                'technologies' => ['Flutter', 'Clean Architecture', 'Offline-first', 'GPS', 'Biometrics', 'REST API'],
                'live_url' => 'https://finkey.app',
                'github_url' => 'https://github.com/bayan-k/finkey',
                'sort_order' => 1,
            ],
            [
                'title' => 'Kaaly — Sales Order App',
                'slug' => 'kaaly-sales',
                'brief_description' => 'Offline-first Sales Order App with Barcode scanning and PDF invoicing.',
                'full_description' => "A powerful sales order management application designed for field sales teams.\n\nKey Features:\n• Offline-first architecture with cloud sync\n• Barcode scanning for quick product lookup\n• PDF invoice generation\n• Real-time inventory updates\n• Customer management system\n• Sales analytics and reporting\n\nBuilt with Riverpod for state management and ObjectBox for local database, ensuring blazing fast performance even offline.",
                'technologies' => ['Flutter', 'Riverpod', 'ObjectBox', 'PDF Generation', 'Barcode Scanner'],
                'live_url' => null,
                'github_url' => 'https://github.com/bayan-k/kaaly',
                'sort_order' => 2,
            ],
            [
                'title' => 'Comtro Real-time Communication App',
                'slug' => 'comtro',
                'brief_description' => 'Real-time IoT communication app using MQTT protocol.',
                'full_description' => "A real-time communication application for IoT device management.\n\nKey Features:\n• MQTT real-time communication\n• Auto reconnect with exponential backoff\n• MVVM architecture with GetX\n• Offline support with GetStorage\n• Responsive adaptive UI\n• Device pairing and management\n\nThis project showcases my expertise in real-time communication protocols and reactive state management.",
                'technologies' => ['Flutter', 'MQTT', 'GetX', 'MVVM', 'IoT', 'WebSocket'],
                'live_url' => null,
                'github_url' => 'https://github.com/bayan-k/comtro',
                'sort_order' => 3,
            ],
            [
                'title' => 'DHB Food Delivery Platform',
                'slug' => 'dhb-food',
                'brief_description' => 'Multi-app food delivery ecosystem with real-time tracking.',
                'full_description' => "A complete food delivery platform with multiple interconnected applications.\n\nApps in Ecosystem:\n• Customer App - Browse, order, and track\n• Restaurant App - Manage orders and menu\n• Rider App - Delivery management and navigation\n\nKey Features:\n• Real-time order tracking\n• Shared API layer across all apps\n• UI consistency with design system\n• Push notifications\n• Payment integration\n• Rating and review system",
                'technologies' => ['Flutter', 'Real-time', 'Firebase', 'Google Maps', 'Stripe'],
                'live_url' => 'https://dhb-food.app',
                'github_url' => null,
                'sort_order' => 4,
            ],
            [
                'title' => 'TaskFlow — Project Management Tool',
                'slug' => 'taskflow',
                'brief_description' => 'Collaborative project management with Kanban boards and team chat.',
                'full_description' => "A modern project management application for teams.\n\nKey Features:\n• Kanban board with drag-and-drop\n• Team collaboration and chat\n• Task assignments and deadlines\n• File attachments and comments\n• Analytics and reporting\n• Calendar integration",
                'technologies' => ['Flutter', 'Bloc', 'Supabase', 'Realtime DB', 'File Upload'],
                'live_url' => null,
                'github_url' => 'https://github.com/bayan-k/taskflow',
                'sort_order' => 5,
            ],
            [
                'title' => 'CryptoWatch — Cryptocurrency Tracker',
                'slug' => 'cryptowatch',
                'brief_description' => 'Real-time cryptocurrency tracking with portfolio management.',
                'full_description' => "A cryptocurrency tracking and portfolio management application.\n\nKey Features:\n• Real-time price updates\n• Portfolio tracking and P&L\n• Price alerts and notifications\n• Historical charts and analytics\n• Watchlist management\n• News aggregation",
                'technologies' => ['Flutter', 'REST API', 'Charts', 'Provider', 'Notifications'],
                'live_url' => null,
                'github_url' => 'https://github.com/bayan-k/cryptowatch',
                'sort_order' => 6,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // 6. Education
        Education::create([
            'institution' => 'College of Engineering Sreekaryam',
            'degree' => 'Bachelor of Technology in Computer Science',
            'start_date' => '2019-08-01',
            'end_date' => '2023-05-01',
            'description' => 'Graduated with focus on software development, data structures, algorithms, and mobile application development.',
            'sort_order' => 1,
        ]);

        // 7. Certifications
        $certificates = [
            [
                'name' => 'Google Flutter & Dart Complete Course',
                'issuer' => 'The Digital Adda',
                'date' => '2024-03-15',
                'url' => 'https://certificate.example.com/flutter-dart',
            ],
            [
                'name' => 'Clean Architecture in Flutter',
                'issuer' => 'Udemy',
                'date' => '2024-06-20',
                'url' => 'https://udemy.com/certificate/clean-arch',
            ],
            [
                'name' => 'Firebase for Flutter Developers',
                'issuer' => 'Google',
                'date' => '2024-01-10',
                'url' => 'https://google.com/certificate/firebase',
            ],
        ];

        foreach ($certificates as $cert) {
            Certificate::create($cert);
        }

        // 8. Services
        $services = [
            [
                'title' => 'Mobile App Development',
                'description' => 'End-to-end Flutter app development with clean architecture, offline-first design, and optimal performance.',
            ],
            [
                'title' => 'UI/UX Implementation',
                'description' => 'Pixel-perfect implementation of Figma/Adobe XD designs with smooth animations and responsive layouts.',
            ],
            [
                'title' => 'API Integration',
                'description' => 'Seamless REST API, GraphQL, and Firebase integration with proper error handling and caching.',
            ],
            [
                'title' => 'App Optimization',
                'description' => 'Performance auditing, startup optimization, and memory management for existing Flutter apps.',
            ],
            [
                'title' => 'Code Review & Consulting',
                'description' => 'Architecture review, best practices consulting, and technical mentorship for Flutter teams.',
            ],
            [
                'title' => 'App Maintenance',
                'description' => 'Ongoing maintenance, bug fixes, feature updates, and App Store/Play Store release management.',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }

        // 9. Testimonials
        $testimonials = [
            [
                'name' => 'Ahmed Khan',
                'role' => 'CTO',
                'company' => 'Dfine Digital Solutions',
                'content' => 'Bayan is an exceptional Flutter developer. His attention to detail and ability to deliver complex features on time is remarkable. The HRMS app he built handles 50+ modules flawlessly.',
            ],
            [
                'name' => 'Sarah Mitchell',
                'role' => 'Product Manager',
                'company' => 'TechStart',
                'content' => 'Working with Bayan was a pleasure. He understood our requirements perfectly and delivered a polished, performant app that our users love. Highly recommend!',
            ],
            [
                'name' => 'Rahul Sharma',
                'role' => 'Founder',
                'company' => 'DHB Foods',
                'content' => 'The food delivery platform Bayan built for us exceeded expectations. The real-time tracking and multi-app ecosystem work seamlessly. Great communication throughout.',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}
