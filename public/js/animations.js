/**
 * ============================================
 * IPEMALIS JAKARTA - ANIMATIONS JAVASCRIPT
 * ============================================
 * 
 * File: public/js/animations.js
 * Description: Intersection Observer untuk scroll animations
 *              dan page load effects
 * Author: IPEMALIS Jakarta Development Team
 * Version: 2.0.0
 * 
 * Dependencies: main.js (untuk utility functions)
 * 
 * Isi file ini:
 * 1. Intersection Observer Setup
 * 2. Page Load Animations
 * 3. Card Hover Effects
 * 4. Parallax Effect
 * 5. Scroll to Top Button
 * 
 * ============================================
 */

'use strict';

/* ============================================
   ELEMENT REFERENCES
   ============================================ */

// Elemen-elemen yang akan dianimasi
const animatedElements = document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in');
const cards = document.querySelectorAll('article');


/* ============================================
   1. INTERSECTION OBSERVER SETUP
   ============================================
   Menggunakan Intersection Observer API untuk
   mendeteksi saat elemen masuk viewport
   ============================================ */

/**
 * Inisialisasi scroll animations menggunakan Intersection Observer
 * Elemen akan mendapat class 'visible' saat masuk viewport
 */
function initScrollAnimations() {
    // Cek apakah browser mendukung Intersection Observer
    if (!('IntersectionObserver' in window)) {
        // Fallback: langsung tampilkan semua elemen
        animatedElements.forEach(el => el.classList.add('visible'));
        console.warn('Intersection Observer tidak didukung. Animasi dinonaktifkan.');
        return;
    }
    
    // Konfigurasi observer
    const observerOptions = {
        // threshold: persentase elemen yang harus terlihat (0.15 = 15%)
        threshold: 0.15,
        // rootMargin: margin tambahan dari viewport
        // -50px dari bawah untuk trigger lebih awal
        rootMargin: '0px 0px -50px 0px'
    };

    // Buat observer instance
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Elemen masuk viewport
                // Tambahkan class 'visible' untuk trigger animasi CSS
                entry.target.classList.add('visible');
                
                // Optional: Stop observing setelah animasi (hemat resource)
                // Uncomment jika animasi hanya perlu sekali
                // observer.unobserve(entry.target);
            }
            // Optional: Animasi berulang saat keluar viewport
            // Uncomment untuk animasi repeating
            // else {
            //     entry.target.classList.remove('visible');
            // }
        });
    }, observerOptions);

    // Observe semua elemen animasi
    animatedElements.forEach(el => {
        observer.observe(el);
    });
}


/* ============================================
   2. PAGE LOAD ANIMATIONS
   ============================================
   Menangani animasi saat halaman pertama kali dimuat
   ============================================ */

/**
 * Inisialisasi animasi saat halaman dimuat
 * Elemen yang sudah terlihat di viewport langsung dianimasikan
 */
function initPageLoadAnimations() {
    // Tambahkan class 'loaded' ke body
    document.body.classList.add('loaded');
    
    // Cek elemen yang sudah ada di viewport saat load
    animatedElements.forEach(el => {
        const rect = el.getBoundingClientRect();
        
        // Cek apakah elemen ada di dalam viewport
        const isInViewport = (
            rect.top < window.innerHeight &&
            rect.bottom > 0 &&
            rect.left < window.innerWidth &&
            rect.right > 0
        );
        
        // Jika sudah di viewport, langsung tampilkan
        if (isInViewport) {
            el.classList.add('visible');
        }
    });
}


/* ============================================
   3. CARD HOVER EFFECTS
   ============================================
   Efek hover untuk card elements
   ============================================ */

/**
 * Inisialisasi efek hover untuk cards
 * Card akan naik sedikit saat di-hover
 */
function initCardHoverEffects() {
    cards.forEach(card => {
        // Event saat mouse masuk card
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
        });
        
        // Event saat mouse keluar card
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
}


/* ============================================
   4. PARALLAX EFFECT
   ============================================
   Efek parallax subtle untuk elemen tertentu
   ============================================ */

let ticking = false;

/**
 * Handle parallax effect saat scroll
 * Memberikan efek depth pada halaman
 */
function handleParallaxEffect() {
    // Cek apakah user prefer reduced motion
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return; // Skip parallax jika user prefer reduced motion
    }
    
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax, .slide-in-right img');
            
            parallaxElements.forEach(el => {
                const speed = 0.15; // Kecepatan parallax (lebih kecil = lebih subtle)
                const yPos = scrolled * speed;
                el.style.transform = `translateY(${yPos}px)`;
            });
            
            ticking = false;
        });
        
        ticking = true;
    }
}


/* ============================================
   5. SCROLL TO TOP BUTTON
   ============================================
   Tombol untuk scroll ke atas halaman
   ============================================ */

/**
 * Membuat dan menginisialisasi tombol scroll to top
 */
function initScrollToTopButton() {
    // Buat elemen button
    const scrollTopBtn = document.createElement('button');
    
    // Set HTML untuk icon
    scrollTopBtn.innerHTML = `
        <svg class="w-6 h-6 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
        </svg>
    `;
    
    // Set attributes dan styles
    scrollTopBtn.id = 'scroll-to-top';
    scrollTopBtn.setAttribute('aria-label', 'Scroll to top');
    scrollTopBtn.className = 'fixed bottom-8 right-8 bg-primary-blue text-white w-12 h-12 rounded-full shadow-lg hover:bg-primary-text transition-all duration-300 opacity-0 pointer-events-none z-40';
    
    // Inline styles untuk memastikan tampilan konsisten
    scrollTopBtn.style.display = 'flex';
    scrollTopBtn.style.alignItems = 'center';
    scrollTopBtn.style.justifyContent = 'center';
    scrollTopBtn.style.backgroundColor = '#065996';
    scrollTopBtn.style.color = 'white';
    
    // Tambahkan ke body
    document.body.appendChild(scrollTopBtn);
    
    // Show/hide berdasarkan posisi scroll
    const toggleButtonVisibility = () => {
        if (window.pageYOffset > 500) {
            scrollTopBtn.style.opacity = '1';
            scrollTopBtn.style.pointerEvents = 'auto';
        } else {
            scrollTopBtn.style.opacity = '0';
            scrollTopBtn.style.pointerEvents = 'none';
        }
    };
    
    // Gunakan throttle jika tersedia
    if (typeof throttle !== 'undefined') {
        window.addEventListener('scroll', throttle(toggleButtonVisibility, 100));
    } else {
        window.addEventListener('scroll', toggleButtonVisibility);
    }
    
    // Handle click - scroll ke atas
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}


/* ============================================
   INITIALIZATION
   ============================================
   Jalankan semua inisialisasi saat DOM ready
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {
    initScrollAnimations();
    initCardHoverEffects();
});

// Jalankan saat window fully loaded (termasuk images)
window.addEventListener('load', function() {
    initPageLoadAnimations();
    initScrollToTopButton();
});

// Parallax on scroll
window.addEventListener('scroll', handleParallaxEffect);


/* ============================================
   INITIALIZATION COMPLETE
   ============================================ */

console.log('%c✅ IPEMALIS Jakarta - Animations.js Loaded', 'color: #065996; font-weight: bold;');
