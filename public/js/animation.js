/**
 * ============================================
 * IPEMALIS JAKARTA - ANIMATIONS SCRIPT
 * ============================================
 * Pure Vanilla JavaScript for smooth animations and interactions
 * Version: 1.0.0
 * Author: IPEMALIS Jakarta Development Team
 * ============================================
 */

'use strict';

// ============================================
// GLOBAL VARIABLES
// ============================================
const header = document.getElementById('main-header');
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');
const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');
const cards = document.querySelectorAll('article');
const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');

let lastScroll = 0;
let ticking = false;


// ============================================
// 1. UTILITY FUNCTIONS
// ============================================

/**
 * Debounce function to limit function calls
 * @param {Function} func - Function to debounce
 * @param {Number} wait - Wait time in milliseconds
 * @param {Boolean} immediate - Execute immediately
 * @returns {Function}
 */
function debounce(func, wait = 10, immediate = true) {
    let timeout;
    return function executedFunction() {
        const context = this;
        const args = arguments;
        
        const later = function() {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        
        if (callNow) func.apply(context, args);
    };
}

/**
 * Throttle function for scroll optimization
 * @param {Function} func - Function to throttle
 * @param {Number} limit - Time limit in milliseconds
 * @returns {Function}
 */
function throttle(func, limit = 16) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}


// ============================================
// 2. NAVBAR SCROLL EFFECTS
// ============================================

/**
 * Handle navbar background and shadow on scroll
 */
function handleNavbarScroll() {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 50) {
        header.style.backgroundColor = 'rgba(246, 252, 255, 0.95)';
        header.style.boxShadow = '0 4px 20px rgba(2, 41, 61, 0.08)';
        header.style.backdropFilter = 'blur(10px)';
        header.style.webkitBackdropFilter = 'blur(10px)'; // Safari support
    } else {
        header.style.backgroundColor = 'transparent';
        header.style.boxShadow = 'none';
        header.style.backdropFilter = 'none';
        header.style.webkitBackdropFilter = 'none';
    }
    
    lastScroll = currentScroll;
}

// Add scroll event listener with throttle
window.addEventListener('scroll', throttle(handleNavbarScroll, 16));


// ============================================
// 3. MOBILE MENU FUNCTIONALITY
// ============================================

/**
 * Toggle mobile menu open/close
 */
function toggleMobileMenu() {
    const isHidden = mobileMenu.classList.contains('hidden');
    const hamburgerTop = mobileMenuButton.querySelector('.hamburger-top');
    const hamburgerMiddle = mobileMenuButton.querySelector('.hamburger-middle');
    const hamburgerBottom = mobileMenuButton.querySelector('.hamburger-bottom');
    
    if (isHidden) {
        // Open menu
        mobileMenu.classList.remove('hidden');
        
        // Animate hamburger to X
        hamburgerTop.setAttribute('d', 'M6 18L18 6');
        hamburgerMiddle.style.opacity = '0';
        hamburgerBottom.setAttribute('d', 'M6 6L18 18');
        
        // Prevent body scroll when menu is open
        document.body.style.overflow = 'hidden';
        
        // Add aria-expanded attribute
        mobileMenuButton.setAttribute('aria-expanded', 'true');
    } else {
        // Close menu
        closeMobileMenu();
    }
}

/**
 * Close mobile menu
 */
function closeMobileMenu() {
    const hamburgerTop = mobileMenuButton.querySelector('.hamburger-top');
    const hamburgerMiddle = mobileMenuButton.querySelector('.hamburger-middle');
    const hamburgerBottom = mobileMenuButton.querySelector('.hamburger-bottom');
    
    mobileMenu.classList.add('hidden');
    
    // Animate X back to hamburger
    hamburgerTop.setAttribute('d', 'M4 6h16');
    hamburgerMiddle.style.opacity = '1';
    hamburgerBottom.setAttribute('d', 'M4 18h16');
    
    // Re-enable body scroll
    document.body.style.overflow = '';
    
    // Update aria-expanded attribute
    mobileMenuButton.setAttribute('aria-expanded', 'false');
}

// Mobile menu button click event
if (mobileMenuButton) {
    mobileMenuButton.addEventListener('click', toggleMobileMenu);
}

// Close mobile menu when clicking on links
mobileNavLinks.forEach(link => {
    link.addEventListener('click', () => {
        closeMobileMenu();
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', (e) => {
    if (!mobileMenu.contains(e.target) && 
        !mobileMenuButton.contains(e.target) && 
        !mobileMenu.classList.contains('hidden')) {
        closeMobileMenu();
    }
});


// ============================================
// 4. SMOOTH SCROLL FOR ANCHOR LINKS
// ============================================

/**
 * Smooth scroll to section when clicking anchor links
 */
function initSmoothScroll() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            // Don't prevent default for "#" only links
            if (href === '#' || href === '#!') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            
            if (target) {
                const headerOffset = 100; // Account for fixed header
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
                
                // Close mobile menu if open
                if (!mobileMenu.classList.contains('hidden')) {
                    closeMobileMenu();
                }
                
                // Update URL hash without jumping
                if (history.pushState) {
                    history.pushState(null, null, href);
                }
            }
        });
    });
}

// Initialize smooth scroll
initSmoothScroll();


// ============================================
// 5. INTERSECTION OBSERVER FOR SCROLL ANIMATIONS
// ============================================

/**
 * Intersection Observer for animating elements on scroll
 */
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add visible class to trigger animation
                entry.target.classList.add('visible');
                
                // Optional: Stop observing after animation (performance optimization)
                // Uncomment the line below if you want one-time animations
                // observer.unobserve(entry.target);
            } else {
                // Optional: Remove visible class when element leaves viewport
                // Uncomment the line below for repeating animations
                // entry.target.classList.remove('visible');
            }
        });
    }, observerOptions);

    // Observe all animated elements
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}

// Initialize scroll animations
initScrollAnimations();


// ============================================
// 6. ACTIVE NAV LINK ON SCROLL
// ============================================

/**
 * Update active navigation link based on scroll position
 */
function setActiveNavLink() {
    const scrollY = window.pageYOffset;
    let currentSection = '';

    sections.forEach(section => {
        const sectionTop = section.offsetTop - 150;
        const sectionHeight = section.offsetHeight;
        const sectionId = section.getAttribute('id');
        
        if (scrollY >= sectionTop && scrollY < sectionTop + sectionHeight) {
            currentSection = sectionId;
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('text-primary-blue', 'font-semibold');
        link.classList.add('text-primary-text');
        
        const href = link.getAttribute('href');
        if (href === `#${currentSection}`) {
            link.classList.remove('text-primary-text');
            link.classList.add('text-primary-blue', 'font-semibold');
        }
    });
}

// Add scroll event listener with debounce
window.addEventListener('scroll', debounce(setActiveNavLink, 15));


// ============================================
// 7. PARALLAX EFFECT (SUBTLE)
// ============================================

/**
 * Add subtle parallax effect to hero logo
 */
function handleParallaxEffect() {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.slide-in-right img');
            
            parallaxElements.forEach(el => {
                const speed = 0.15; // Reduced for more subtle effect
                const yPos = scrolled * speed;
                el.style.transform = `translateY(${yPos}px)`;
            });
            
            ticking = false;
        });
        
        ticking = true;
    }
}

// Add parallax effect on scroll
window.addEventListener('scroll', handleParallaxEffect);


// ============================================
// 8. CARD HOVER EFFECTS
// ============================================

/**
 * Add smooth hover effects to cards
 */
function initCardHoverEffects() {
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}

// Initialize card hover effects
initCardHoverEffects();


// ============================================
// 9. KEYBOARD NAVIGATION & ACCESSIBILITY
// ============================================

/**
 * Handle keyboard navigation for accessibility
 */
function initKeyboardNavigation() {
    document.addEventListener('keydown', (e) => {
        // Close mobile menu on Escape key
        if (e.key === 'Escape' && !mobileMenu.classList.contains('hidden')) {
            closeMobileMenu();
        }
        
        // Handle Tab key for focus management
        if (e.key === 'Tab' && !mobileMenu.classList.contains('hidden')) {
            handleFocusTrap(e);
        }
    });
}

/**
 * Focus trap for mobile menu
 * @param {Event} e - Keyboard event
 */
function handleFocusTrap(e) {
    const focusableElements = mobileMenu.querySelectorAll(
        'a, button, input, select, textarea, [tabindex]:not([tabindex="-1"])'
    );
    const firstElement = focusableElements[0];
    const lastElement = focusableElements[focusableElements.length - 1];

    if (e.shiftKey && document.activeElement === firstElement) {
        e.preventDefault();
        lastElement.focus();
    } else if (!e.shiftKey && document.activeElement === lastElement) {
        e.preventDefault();
        firstElement.focus();
    }
}

// Initialize keyboard navigation
initKeyboardNavigation();


// ============================================
// 10. PAGE LOAD ANIMATIONS
// ============================================

/**
 * Initialize animations on page load
 */
function initPageLoadAnimations() {
    // Add loaded class to body
    document.body.classList.add('loaded');
    
    // Check for elements already in viewport on load
    animatedElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        const isInViewport = (
            rect.top < window.innerHeight &&
            rect.bottom > 0 &&
            rect.left < window.innerWidth &&
            rect.right > 0
        );
        
        if (isInViewport) {
            el.classList.add('visible');
        }
    });
    
    // Initial navbar state
    handleNavbarScroll();
    
    // Initial active nav link
    setActiveNavLink();
}

// Execute on page load
window.addEventListener('load', initPageLoadAnimations);


// ============================================
// 11. SCROLL TO TOP BUTTON (OPTIONAL)
// ============================================

/**
 * Create and handle scroll to top button
 */
function initScrollToTopButton() {
    // Create button element
    const scrollTopBtn = document.createElement('button');
    scrollTopBtn.innerHTML = `
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    `;
    scrollTopBtn.className = 'fixed bottom-8 right-8 bg-primary-blue text-white w-12 h-12 rounded-full shadow-lg hover:bg-primary-text transition-all duration-300 opacity-0 pointer-events-none z-40';
    scrollTopBtn.id = 'scroll-to-top';
    scrollTopBtn.setAttribute('aria-label', 'Scroll to top');
    
    document.body.appendChild(scrollTopBtn);
    
    // Show/hide button based on scroll position
    window.addEventListener('scroll', throttle(() => {
        if (window.pageYOffset > 500) {
            scrollTopBtn.style.opacity = '1';
            scrollTopBtn.style.pointerEvents = 'auto';
        } else {
            scrollTopBtn.style.opacity = '0';
            scrollTopBtn.style.pointerEvents = 'none';
        }
    }, 100));
    
    // Scroll to top on click
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Initialize scroll to top button
initScrollToTopButton();


// ============================================
// 12. PERFORMANCE MONITORING
// ============================================

/**
 * Monitor and log performance metrics
 */
function monitorPerformance() {
    if ('performance' in window) {
        window.addEventListener('load', () => {
            const perfData = window.performance.timing;
            const pageLoadTime = perfData.loadEventEnd - perfData.navigationStart;
            const connectTime = perfData.responseEnd - perfData.requestStart;
            const renderTime = perfData.domComplete - perfData.domLoading;
            
            console.log('%c🚀 IPEMALIS Jakarta - Performance Metrics', 'color: #065996; font-weight: bold; font-size: 14px;');
            console.log(`📊 Page Load Time: ${pageLoadTime}ms`);
            console.log(`🔌 Connection Time: ${connectTime}ms`);
            console.log(`🎨 Render Time: ${renderTime}ms`);
            console.log('%c✅ Website Loaded Successfully!', 'color: #02293D; font-weight: bold;');
        });
    }
}

// Monitor performance
monitorPerformance();


// ============================================
// 13. LAZY LOADING IMAGES (OPTIONAL)
// ============================================

/**
 * Lazy load images for better performance
 */
function initLazyLoading() {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                    imageObserver.unobserve(img);
                }
            });
        });
        
        lazyImages.forEach(img => imageObserver.observe(img));
    } else {
        // Fallback for browsers without IntersectionObserver
        lazyImages.forEach(img => {
            img.src = img.dataset.src;
        });
    }
}

// Initialize lazy loading if needed
// initLazyLoading();


// ============================================
// 14. FORM VALIDATION (FOR GABUNG SECTION)
// ============================================

/**
 * Handle form validation for contact/join forms
 */
function initFormValidation() {
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form fields
            const formData = new FormData(this);
            let isValid = true;
            
            // Basic validation
            for (let [key, value] of formData.entries()) {
                if (!value.trim()) {
                    isValid = false;
                    // Show error message
                    console.log(`Field ${key} is required`);
                }
            }
            
            if (isValid) {
                // Submit form or handle AJAX request
                console.log('Form is valid, submitting...');
                // this.submit();
            }
        });
    });
}

// Initialize form validation if forms exist
// initFormValidation();


// ============================================
// 15. RESIZE HANDLER
// ============================================

/**
 * Handle window resize events
 */
function handleWindowResize() {
    // Close mobile menu on desktop view
    if (window.innerWidth >= 1024 && !mobileMenu.classList.contains('hidden')) {
        closeMobileMenu();
    }
}

// Add resize event listener with debounce
window.addEventListener('resize', debounce(handleWindowResize, 250));


// ============================================
// 16. BROWSER COMPATIBILITY CHECKS
// ============================================

/**
 * Check browser compatibility and apply polyfills if needed
 */
function checkBrowserCompatibility() {
    // Check for smooth scroll support
    if (!('scrollBehavior' in document.documentElement.style)) {
        console.warn('Smooth scroll not supported. Consider adding a polyfill.');
    }
    
    // Check for IntersectionObserver support
    if (!('IntersectionObserver' in window)) {
        console.warn('IntersectionObserver not supported. Animations may not work properly.');
    }
    
    // Check for CSS backdrop-filter support
    const testElement = document.createElement('div');
    if (!('backdropFilter' in testElement.style) && !('webkitBackdropFilter' in testElement.style)) {
        console.warn('backdrop-filter not supported.');
    }
}

// Run compatibility checks
checkBrowserCompatibility();


// ============================================
// INITIALIZATION COMPLETE
// ============================================

console.log('%c🎉 IPEMALIS Jakarta Animations Initialized', 'background: #065996; color: white; padding: 8px 16px; border-radius: 4px; font-weight: bold;');

// Export functions for external use if needed
if (typeof module !== 'undefined' && module.exports) {
    module.exports = {
        toggleMobileMenu,
        closeMobileMenu,
        handleNavbarScroll,
        setActiveNavLink
    };
}