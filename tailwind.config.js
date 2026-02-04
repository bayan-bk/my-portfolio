import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                heading: ['Space Grotesk', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'bg-primary': '#0A0A0A',
                'bg-secondary': '#111111',
                'bg-card': '#161616',
                'border': '#2A2A2A',
                'gold': {
                    DEFAULT: '#C9B037',
                    light: '#E5D68A',
                    dark: '#9A8420',
                },
            },
            animation: {
                'fade-in-up': 'fadeInUp 0.8s ease-out',
                'fade-in': 'fadeIn 1s ease-out',
                'fade-in-left': 'fadeInLeft 0.8s ease-out',
                'fade-in-right': 'fadeInRight 0.8s ease-out',
                'float': 'float 6s ease-in-out infinite',
                'float-delayed': 'float 8s ease-in-out 2s infinite',
                'pulse-gold': 'pulseGold 3s ease-in-out infinite',
                'shimmer': 'shimmer 2s infinite',
            },
            keyframes: {
                fadeInUp: {
                    '0%': { opacity: '0', transform: 'translateY(40px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeIn: {
                    '0%': { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                fadeInLeft: {
                    '0%': { opacity: '0', transform: 'translateX(-40px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                fadeInRight: {
                    '0%': { opacity: '0', transform: 'translateX(40px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                float: {
                    '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
                    '50%': { transform: 'translateY(-20px) rotate(2deg)' },
                },
                pulseGold: {
                    '0%, 100%': { opacity: '0.3', boxShadow: '0 0 20px rgba(201, 176, 55, 0.2)' },
                    '50%': { opacity: '0.6', boxShadow: '0 0 40px rgba(201, 176, 55, 0.4)' },
                },
                shimmer: {
                    '0%': { backgroundPosition: '-200% 0' },
                    '100%': { backgroundPosition: '200% 0' },
                },
            },
            boxShadow: {
                'glow-gold-sm': '0 0 20px rgba(201, 176, 55, 0.1)',
                'glow-gold-md': '0 0 40px rgba(201, 176, 55, 0.15)',
                'glow-gold-lg': '0 0 80px rgba(201, 176, 55, 0.2)',
            },
        },
    },

    plugins: [forms],
};
