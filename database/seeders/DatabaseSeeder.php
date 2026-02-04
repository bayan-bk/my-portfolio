<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Project;
use App\Models\Education;
use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create User
        $user = User::create([
            'name' => 'Bayan K',
            'email' => 'bayanbinaboobacker@gmail.com', // Use real email
            'password' => Hash::make('password'), // Access: password
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
        ]);

        // 3. Skills
        // Languages
        $languages = ['Dart', 'C'];
        foreach ($languages as $lang) {
            Skill::create(['name' => $lang, 'category' => 'Languages', 'proficiency' => 90]);
        }
        // Frameworks
        Skill::create(['name' => 'Flutter', 'category' => 'Frameworks', 'proficiency' => 95]);
        // State Management
        $sm = ['Provider', 'Bloc', 'Riverpod', 'GetX'];
        foreach ($sm as $s) {
            Skill::create(['name' => $s, 'category' => 'State Management', 'proficiency' => 85]);
        }
        // Backend & APIs
        $backend = ['REST APIs', 'Firebase', 'Supabase', 'MQTT'];
        foreach ($backend as $b) {
            Skill::create(['name' => $b, 'category' => 'Backend & APIs', 'proficiency' => 80]);
        }
        // Databases
        $db = ['Firestore', 'SQLite', 'Hive', 'Supabase'];
        foreach ($db as $d) {
            Skill::create(['name' => $d, 'category' => 'Databases', 'proficiency' => 80]);
        }
        // Tools
        $tools = ['Git', 'Android Studio', 'VS Code', 'Flutter DevTools', 'Postman'];
        foreach ($tools as $t) {
            Skill::create(['name' => $t, 'category' => 'Tools', 'proficiency' => 85]);
        }

        // 4. Experience
        Experience::create([
            'company' => 'Dfine Digital Solutions',
            'role' => 'Flutter Developer',
            'start_date' => '2024-01-01', // Approx
            'end_date' => null, // Present
            'description' => "• Owned Flutter core features using clean architecture\n• Improved startup performance by 40% (5s → 3s)\n• Debugged production crashes\n• Collaborated with backend and QA teams",
            'sort_order' => 1,
        ]);
        Experience::create([
            'company' => 'Chegg Expert',
            'role' => 'Subject Matter Expert',
            'start_date' => '2023-01-01', // Approx
            'end_date' => null, // Present
            'description' => "• Delivered CS solutions\n• Technical mentoring\n• Problem-solving focused role",
            'sort_order' => 2,
        ]);

        // 5. Projects
        Project::create([
            'title' => 'Finkey — Enterprise HRMS Mobile App',
            'slug' => 'finkey-hrms',
            'brief_description' => 'Enterprise HRMS with Attendance, Access Control, and Analytics.',
            'full_description' => "Attendance, Access Control, Performance Analytics. 50+ modules. Offline-first sync. GPS Geofencing using Haversine formula. RBAC system. Real-time dashboards with KPIs.",
            'technologies' => ['Flutter', 'Clean Architecture', 'Offline-first', 'GPS'],
            'sort_order' => 1,
        ]);
        Project::create([
            'title' => 'Kaaly — Sales Order App',
            'slug' => 'kaaly-sales',
            'brief_description' => 'Offline-first Sales Order App with Barcode scanning.',
            'full_description' => "Offline-first Flutter App. Riverpod + ObjectBox. Barcode scanning. PDF invoice generation. Cloud sync.",
            'technologies' => ['Flutter', 'Riverpod', 'ObjectBox', 'PDF'],
            'sort_order' => 2,
        ]);
        Project::create([
            'title' => 'Comtro Flutter App',
            'slug' => 'comtro',
            'brief_description' => 'Real-time communication app using MQTT.',
            'full_description' => "MQTT real-time communication. Auto reconnect. MVVM architecture (GetX). Offline support (GetStorage). Responsive adaptive UI.",
            'technologies' => ['Flutter', 'MQTT', 'GetX', 'MVVM'],
            'sort_order' => 3,
        ]);
        Project::create([
            'title' => 'DHB Food Delivery Platform',
            'slug' => 'dhb-food',
            'brief_description' => 'Multi-app ecosystem (Customer, Restaurant, Rider).',
            'full_description' => "Multi-app ecosystem (Customer, Restaurant, Rider). Real-time order tracking. Shared APIs. UI consistency across apps.",
            'technologies' => ['Flutter', 'Real-time', 'API Shared'],
            'sort_order' => 4,
        ]);

        // 6. Education
        Education::create([
            'institution' => 'College of Engineering Sreekaryam',
            'degree' => 'Bachelor of Technology in Computer Science',
            'start_date' => '2019-01-01', // Approx
            'end_date' => '2023-01-01', // Approx
        ]);

        // 7. Certifications
        Certificate::create([
            'name' => 'Google Flutter & Dart',
            'issuer' => 'The Digital Adda',
            'date' => '2025-01-01', // Approx
        ]);
    }
}
