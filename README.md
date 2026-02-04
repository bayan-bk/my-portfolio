# Bayan K - Flutter Developer Portfolio

A beautiful, fully static portfolio website built with Laravel & Tailwind CSS. **No database required!**

## 🎨 Features

- **Black & Gold Theme** - Premium, modern aesthetic
- **Fully Static** - All data stored in config files (no database needed)
- **Super Responsive** - Works perfectly on mobile, tablet, and desktop
- **SMTP Contact Form** - Sends emails directly to your inbox
- **GSAP Animations** - Smooth scroll-triggered animations
- **SEO Optimized** - Meta tags, semantic HTML, and fast loading

## 🚀 Quick Start

### 1. Clone & Install
```bash
git clone https://github.com/bayan-k/portfolio.git
cd portfolio
composer install
npm install
```

### 2. Configure Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 3. Build Assets
```bash
npm run build
```

### 4. Run Locally
```bash
php artisan serve
```

Visit `http://127.0.0.1:8000`

## 📝 How to Edit Your Data

All your portfolio data is stored in a single file: **`config/portfolio.php`**

### Profile Information
```php
'profile' => [
    'name' => 'Your Name',
    'role' => 'Your Title',
    'email' => 'your@email.com',
    'phone' => '+1234567890',
    'location' => 'Your City, Country',
    'experience_years' => '5',
    'about' => 'Your bio here...',
    'avatar' => 'https://your-image-url.com/avatar.jpg',
    'resume_url' => 'https://your-resume-link.com',
    'social' => [
        'github' => 'https://github.com/yourusername',
        'linkedin' => 'https://linkedin.com/in/yourusername',
        'twitter' => 'https://twitter.com/yourusername',
    ],
],
```

### Add a New Project
```php
'projects' => [
    [
        'slug' => 'my-project',  // URL-friendly name
        'title' => 'My Awesome Project',
        'brief_description' => 'Short description for cards',
        'full_description' => 'Detailed description with bullet points...',
        'technologies' => ['Flutter', 'Firebase', 'REST API'],
        'image' => 'https://your-project-image.com/image.jpg',
        'live_url' => 'https://live-demo.com',
        'github_url' => 'https://github.com/you/project',
        'featured' => true,  // Show on homepage
    ],
    // Add more projects...
],
```

### Add Work Experience
```php
'experiences' => [
    [
        'company' => 'Company Name',
        'role' => 'Your Position',
        'start_date' => 'Jan 2024',
        'end_date' => 'Present',  // or 'Dec 2024'
        'description' => '• Achievement 1\n• Achievement 2\n• Achievement 3',
    ],
    // Add more experiences...
],
```

### Add Education
```php
'education' => [
    [
        'institution' => 'University Name',
        'degree' => 'Bachelor of Technology',
        'start_year' => '2019',
        'end_year' => '2023',
        'description' => 'Optional description...',
    ],
],
```

### Add Certifications
```php
'certificates' => [
    [
        'name' => 'Certificate Name',
        'issuer' => 'Issuing Organization',
        'date' => 'Mar 2024',
        'url' => 'https://certificate-link.com',
    ],
],
```

### Add Services
```php
'services' => [
    [
        'title' => 'Service Title',
        'description' => 'What you offer...',
        'icon' => 'mobile',  // Currently not used, but reserved
    ],
],
```

### Add Testimonials
```php
'testimonials' => [
    [
        'name' => 'Client Name',
        'role' => 'Their Position',
        'company' => 'Their Company',
        'content' => 'What they said about you...',
        'avatar' => 'https://client-avatar.com/image.jpg',
    ],
],
```

### Update SEO Settings
```php
'seo' => [
    'title' => 'Your Name - Your Title',
    'description' => 'Your meta description for search engines...',
    'keywords' => 'keyword1, keyword2, keyword3',
    'author' => 'Your Name',
],
```

## 📧 Setting Up SMTP (Contact Form)

Edit your `.env` file to configure email:

### For Gmail:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your-email@gmail.com"
MAIL_FROM_NAME="Your Portfolio"
```

**Important:** For Gmail, you need to:
1. Enable 2-Factor Authentication
2. Generate an App Password at https://myaccount.google.com/apppasswords
3. Use the App Password (not your regular password)

### For Other Providers:
- **Outlook/Hotmail**: `smtp-mail.outlook.com`, Port 587
- **Yahoo**: `smtp.mail.yahoo.com`, Port 465 (SSL)
- **Your domain**: Check with your hosting provider

## 🌐 Deployment

### Option 1: Shared Hosting (cPanel)
1. Upload all files to `public_html`
2. Move `public/` contents to root
3. Update `index.php` paths
4. Configure `.env` for production

### Option 2: VPS (DigitalOcean, AWS, etc.)
```bash
# On your server
git clone your-repo
composer install --optimize-autoloader --no-dev
npm install && npm run build
php artisan config:cache
```

### Option 3: Platform Hosting
- **Vercel**: Not recommended (PHP)
- **Railway**: ✅ Supports Laravel
- **Render**: ✅ Supports Laravel
- **Fly.io**: ✅ Supports Laravel

## 📁 Project Structure

```
portfolio/
├── config/
│   └── portfolio.php      # ⭐ ALL YOUR DATA HERE
├── resources/
│   ├── views/
│   │   ├── home.blade.php
│   │   ├── about.blade.php
│   │   ├── contact.blade.php
│   │   └── projects/
│   └── css/
│       └── app.css        # Theme & animations
├── app/Http/Controllers/
│   ├── HomeController.php
│   ├── ProjectShowcaseController.php
│   └── ContactController.php
└── .env                   # SMTP & app config
```

## 🎨 Customizing Colors

Edit `resources/css/app.css`:

```css
:root {
    --color-bg-primary: #0A0A0A;      /* Main background */
    --color-bg-secondary: #111111;     /* Cards background */
    --color-border: #2A2A2A;           /* Border color */
    --color-gold: #C9B037;             /* Accent color */
    --color-gold-light: #E5D68A;       /* Light accent */
    --color-gold-dark: #9A8420;        /* Dark accent */
}
```

After changes, run:
```bash
npm run build
```

## 📞 Support

Need help? Open an issue on GitHub or contact me at bayanbinaboobacker@gmail.com

## 📄 License

MIT License - feel free to use this for your own portfolio!

---

Made with ❤️ by Bayan K
