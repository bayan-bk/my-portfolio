/**
 * Bayan.dev Portfolio - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Menu Toggle
    const mobileBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('icon-menu-open');
    const iconClose = document.getElementById('icon-menu-close');

    if (mobileBtn && mobileMenu) {
        mobileBtn.addEventListener('click', () => {
            const isOpen = !mobileMenu.classList.contains('hidden');
            if (isOpen) {
                mobileMenu.classList.add('hidden');
                if (iconOpen) iconOpen.classList.remove('hidden');
                if (iconClose) iconClose.classList.add('hidden');
            } else {
                mobileMenu.classList.remove('hidden');
                if (iconOpen) iconOpen.classList.add('hidden');
                if (iconClose) iconClose.classList.remove('hidden');
            }
        });
    }

    // 2. Navbar Scroll Glass Effect
    const navbar = document.getElementById('navbar');
    const handleScroll = () => {
        if (!navbar) return;
        if (window.scrollY > 40) {
            navbar.classList.add('glass-nav');
            navbar.classList.remove('bg-transparent');
        } else {
            navbar.classList.remove('glass-nav');
            navbar.classList.add('bg-transparent');
        }
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();

    // 3. Typing Animation (Hero)
    const typingElement = document.getElementById('typing-text');
    if (typingElement) {
        const textArray = ['Enterprise Flutter Apps', 'Offline-First Architectures', 'Scalable Mobile Solutions'];
        let textIndex = 0;
        let charIndex = 0;
        let isDeleting = false;
        const typeSpeed = 90;
        const deleteSpeed = 45;
        const pauseTime = 1600;

        function typeLoop() {
            const currentFullText = textArray[textIndex];
            if (isDeleting) {
                charIndex--;
                typingElement.textContent = currentFullText.substring(0, charIndex);
            } else {
                charIndex++;
                typingElement.textContent = currentFullText.substring(0, charIndex);
            }

            let currentSpeed = isDeleting ? deleteSpeed : typeSpeed;

            if (!isDeleting && charIndex === currentFullText.length) {
                currentSpeed = pauseTime;
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                textIndex = (textIndex + 1) % textArray.length;
                currentSpeed = 300;
            }

            setTimeout(typeLoop, currentSpeed);
        }
        typeLoop();
    }

    // 4. GSAP ScrollTrigger Animations
    if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
        gsap.registerPlugin(ScrollTrigger);

        // Standard reveal
        gsap.utils.toArray('.reveal').forEach((elem) => {
            gsap.fromTo(
                elem,
                { y: 50, opacity: 0 },
                {
                    y: 0,
                    opacity: 1,
                    duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 88%',
                        toggleActions: 'play none none none',
                    },
                }
            );
        });

        // Reveal Left
        gsap.utils.toArray('.reveal-left').forEach((elem) => {
            gsap.fromTo(
                elem,
                { x: -50, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 88%',
                        toggleActions: 'play none none none',
                    },
                }
            );
        });

        // Reveal Right
        gsap.utils.toArray('.reveal-right').forEach((elem) => {
            gsap.fromTo(
                elem,
                { x: 50, opacity: 0 },
                {
                    x: 0,
                    opacity: 1,
                    duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: elem,
                        start: 'top 88%',
                        toggleActions: 'play none none none',
                    },
                }
            );
        });

        // Stagger Grids
        gsap.utils.toArray('.stagger-grid').forEach((grid) => {
            const items = grid.querySelectorAll('.stagger-item');
            if (items.length > 0) {
                gsap.fromTo(
                    items,
                    { y: 35, opacity: 0 },
                    {
                        y: 0,
                        opacity: 1,
                        duration: 0.7,
                        stagger: 0.08,
                        ease: 'power3.out',
                        scrollTrigger: {
                            trigger: grid,
                            start: 'top 85%',
                            toggleActions: 'play none none none',
                        },
                    }
                );
            }
        });

        // Animate skill bars on scroll
        gsap.utils.toArray('.skill-bar-fill').forEach((bar) => {
            ScrollTrigger.create({
                trigger: bar,
                start: 'top 90%',
                onEnter: () => {
                    bar.style.transform = 'scaleX(1)';
                },
            });
        });
    } else {
        // Fallback if GSAP is blocked or not loaded
        document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach((el) => {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
        document.querySelectorAll('.skill-bar-fill').forEach((bar) => {
            bar.style.transform = 'scaleX(1)';
        });
    }

    // 5. Magnetic Buttons Effect
    document.querySelectorAll('.magnetic-btn').forEach((btn) => {
        btn.addEventListener('mousemove', (e) => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate(${x * 0.15}px, ${y * 0.15}px)`;
        });
        btn.addEventListener('mouseleave', () => {
            btn.style.transform = 'translate(0px, 0px)';
        });
    });

    // 6. Interactive Contact Form Handler (works with Web3Forms, Formspree, or mailto fallback)
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const statusBox = document.getElementById('form-status');
            const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Send Message';

            const formData = new FormData(contactForm);
            const name = formData.get('name') || '';
            const email = formData.get('email') || '';
            const subject = formData.get('subject') || 'Portfolio Inquiry';
            const message = formData.get('message') || '';

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg> Sending...
                `;
            }

            try {
                // If the user has configured an action URL (e.g. Web3Forms or Formspree)
                const actionUrl = contactForm.getAttribute('action');
                if (actionUrl && !actionUrl.startsWith('#') && !actionUrl.startsWith('javascript:')) {
                    const response = await fetch(actionUrl, {
                        method: 'POST',
                        body: formData,
                        headers: { Accept: 'application/json' },
                    });

                    if (response.ok) {
                        showStatus(
                            'Thank you! Your message has been sent successfully. I will get back to you shortly.',
                            'success'
                        );
                        contactForm.reset();
                    } else {
                        throw new Error('Form submission failed.');
                    }
                } else {
                    // Fallback simulation + open mailto
                    await new Promise((res) => setTimeout(res, 800));
                    showStatus(
                        'Thank you! Opening your email client to send your message directly to bayanbinaboobacker@gmail.com...',
                        'success'
                    );
                    const mailtoUrl = `mailto:bayanbinaboobacker@gmail.com?subject=${encodeURIComponent(
                        subject
                    )}&body=${encodeURIComponent(`From: ${name} (${email})\n\n${message}`)}`;
                    window.location.href = mailtoUrl;
                }
            } catch (err) {
                showStatus(
                    'An error occurred. Please feel free to email directly at bayanbinaboobacker@gmail.com.',
                    'error'
                );
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnText;
                }
            }

            function showStatus(msg, type) {
                if (!statusBox) return;
                statusBox.classList.remove('hidden');
                if (type === 'success') {
                    statusBox.className =
                        'p-4 bg-[#C9B037]/10 border border-[#C9B037]/30 text-[#C9B037] rounded-xl mb-6 text-sm sm:text-base';
                } else {
                    statusBox.className =
                        'p-4 bg-red-500/10 border border-red-500/30 text-red-400 rounded-xl mb-6 text-sm sm:text-base';
                }
                statusBox.textContent = msg;
            }
        });
    }
});
