/**
 * ============================================
 * IPEMALIS JAKARTA - PROFIL PAGE SCRIPT
 * ============================================
 * Additional JavaScript specifically for Profil page
 * Extends the main animations.js functionality
 * Version: 1.0.0
 * ============================================
 */

'use strict';

// ============================================
// COUNTER ANIMATION FOR STATISTICS
// ============================================

/**
 * Animate counter numbers from 0 to target value
 * Used for statistics display in the dark section
 */
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    const duration = 2000; // Animation duration in milliseconds
    const frameDuration = 1000 / 60; // 60 FPS
    
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const totalFrames = Math.round(duration / frameDuration);
        let frame = 0;
        
        // Easing function for smooth animation
        const easeOutQuad = t => t * (2 - t);
        
        const counterAnimation = setInterval(() => {
            frame++;
            const progress = easeOutQuad(frame / totalFrames);
            const currentCount = Math.round(target * progress);
            
            counter.textContent = currentCount;
            
            // Stop animation when complete
            if (frame === totalFrames) {
                clearInterval(counterAnimation);
                counter.textContent = target;
            }
        }, frameDuration);
    });
}

/**
 * Initialize counter animation when section is visible
 */
function initCounterObserver() {
    const counterSection = document.querySelector('#tentang-organisasi');
    
    if (!counterSection) return;
    
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate counters when section is visible
                animateCounters();
                
                // Stop observing after animation triggered
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    observer.observe(counterSection);
}

// Initialize counter observer when DOM is ready
document.addEventListener('DOMContentLoaded', initCounterObserver);


// ============================================
// CARD GRADIENT ANIMATION ON HOVER
// ============================================

/**
 * Add interactive gradient effect to blue cards
 */
function initCardGradientEffect() {
    const blueCards = document.querySelectorAll('#program-unggulan .group');
    
    blueCards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const percentX = (x - centerX) / centerX;
            const percentY = (y - centerY) / centerY;
            
            const gradient = card.querySelector('.absolute');
            if (gradient) {
                gradient.style.transform = `scale(1.05) translate(${percentX * 10}px, ${percentY * 10}px)`;
            }
        });
        
        card.addEventListener('mouseleave', () => {
            const gradient = card.querySelector('.absolute');
            if (gradient) {
                gradient.style.transform = 'scale(1) translate(0, 0)';
            }
        });
    });
}

// Initialize card gradient effects
window.addEventListener('load', initCardGradientEffect);


// ============================================
// ICON ANIMATION ON SCROLL
// ============================================

/**
 * Animate icons in the white cards when they become visible
 */
function initIconAnimations() {
    const iconCards = document.querySelectorAll('#visi-misi article');
    
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                const icon = entry.target.querySelector('.w-12.h-12');
                if (icon) {
                    // Add bounce animation with delay based on index
                    setTimeout(() => {
                        icon.style.animation = 'bounce 0.6s ease-in-out';
                    }, index * 100);
                }
            }
        });
    }, observerOptions);
    
    iconCards.forEach(card => observer.observe(card));
}

// Define bounce animation
const style = document.createElement('style');
style.textContent = `
    @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }
`;
document.head.appendChild(style);

// Initialize icon animations
window.addEventListener('load', initIconAnimations);


// ============================================
// SMOOTH SECTION TRANSITIONS
// ============================================

/**
 * Add smooth fade-in effect when scrolling between sections
 */
function initSectionTransitions() {
    const sections = document.querySelectorAll('section');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -10% 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    sections.forEach(section => {
        section.style.opacity = '0';
        section.style.transform = 'translateY(20px)';
        section.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(section);
    });
}

// Initialize section transitions
// initSectionTransitions(); // Uncomment if you want this effect


// ============================================
// PARALLAX EFFECT FOR LARGE CARD
// ============================================

/**
 * Add subtle parallax scrolling to the large blue card
 */
function initCardParallax() {
    const largeCard = document.querySelector('#tentang-organisasi article');
    
    if (!largeCard) return;
    
    let ticking = false;
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() =>