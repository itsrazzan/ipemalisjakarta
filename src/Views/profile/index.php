<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title>Profil IPEMALIS Jakarta - Organisasi Pemuda Mahasiswa Bengkalis di Tangerang Selatan</title>
    <meta name="title" content="Profil IPEMALIS Jakarta - Organisasi Pemuda Mahasiswa Bengkalis di Tangerang Selatan">
    <meta name="description" content="Profil lengkap IPEMALIS Jakarta, visi misi, struktur organisasi, dan program kerja ikatan pemuda mahasiswa Bengkalis di Jakarta, Tangerang Selatan dan Ciputat.">
    <meta name="keywords" content="profil ipemalis jakarta, visi misi ipemalis, struktur organisasi mahasiswa bengkalis, program kerja pemuda bengkalis, tentang ipemalis jakarta, sejarah ipemalis, organisasi mahasiswa bengkalis tangerang selatan">
    <meta name="author" content="IPEMALIS Jakarta">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://ipemalisjakarta.org/profil">
    <meta property="og:title" content="Profil IPEMALIS Jakarta - Organisasi Pemuda Mahasiswa Bengkalis">
    <meta property="og:description" content="Profil lengkap IPEMALIS Jakarta, visi misi, struktur organisasi, dan program kerja ikatan pemuda mahasiswa Bengkalis di Jakarta.">
    <meta property="og:image" content="https://ipemalisjakarta.org/assets/images/og-image-profil.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://ipemalisjakarta.org/profil">
    <meta property="twitter:title" content="Profil IPEMALIS Jakarta">
    <meta property="twitter:description" content="Profil lengkap IPEMALIS Jakarta, visi misi, struktur organisasi, dan program kerja ikatan pemuda mahasiswa Bengkalis di Jakarta.">
    <meta property="twitter:image" content="https://ipemalisjakarta.org/assets/images/og-image-profil.jpg">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://ipemalisjakarta.org/profil">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">

    <!-- Google Fonts - Sora -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS v4 CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sora': ['Sora', 'sans-serif']
                    },
                    colors: {
                        'primary-bg': '#F6FCFF',
                        'primary-blue': '#065996',
                        'primary-text': '#02293D',
                        'light-blue-bg': '#E6EFFE',
                        'dark-section': '#263151'
                    },
                    maxWidth: {
                        'content': '1080px'
                    }
                }
            }
        }
    </script>

    <!-- Schema.org structured data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "IPEMALIS Jakarta",
        "url": "https://ipemalisjakarta.org",
        "logo": "https://ipemalisjakarta.org/assets/images/logo-ipemalis.png",
        "description": "Profil organisasi pemuda mahasiswa Bengkalis di Tangerang Selatan",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Tangerang Selatan",
            "addressRegion": "Banten",
            "addressCountry": "ID"
        }
    }
    </script>

    <style>
        * {
            font-family: 'Sora', sans-serif;
        }
        
        body {
            background-color: #F6FCFF;
        }

        /* Animation Classes - Same as home page */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-in-left {
            opacity: 0;
            transform: translateX(-50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .slide-in-left.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .slide-in-right {
            opacity: 0;
            transform: translateX(50px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .slide-in-right.visible {
            opacity: 1;
            transform: translateX(0);
        }

        .scale-in {
            opacity: 0;
            transform: scale(0.9);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .scale-in.visible {
            opacity: 1;
            transform: scale(1);
        }

        /* Counter Animation */
        .counter {
            font-variant-numeric: tabular-nums;
        }
    </style>
</head>

<body class="antialiased">
    
    <!-- Header will be included via PHP -->
    <?php include 'header.html'; ?>

    <!-- Main Content -->
    <main class="pt-20 lg:pt-24">
        
        <!-- Hero Section - Profil -->
        <section class="relative py-12 lg:py-20 overflow-hidden">
            <div class="container mx-auto px-4 lg:px-8 max-w-content">
                <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    <!-- Left Content -->
                    <div class="slide-in-left">
                        <h1 class="text-3xl lg:text-4xl xl:text-5xl font-bold text-primary-text leading-tight mb-4">
                            Lorem ipsum Dolor sit amet, Consectetur
                            <span class="block text-primary-blue mt-2">2025</span>
                        </h1>
                        <p class="text-base lg:text-lg text-primary-text/80 leading-relaxed mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure.
                        </p>
                    </div>

                    <!-- Right Content - Logo -->
                    <div class="slide-in-right flex justify-center lg:justify-end">
                        <img src="assets/images/logo-ipemalis.png" 
                             alt="Logo IPEMALIS Jakarta - Ikatan Pemuda Mahasiswa Kabupaten Bengkalis" 
                             class="w-64 lg:w-80 xl:w-96 h-auto"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <!-- Divider with gradient line (matching yellow line in design) -->
        <div class="w-full h-1 bg-gradient-to-r from-transparent via-yellow-400 to-transparent"></div>

        <!-- Section 1: Visi & Misi / Info Cards (4 white cards with shadow) -->
        <section id="visi-misi" class="py-12 lg:py-16 bg-light-blue-bg">
            <div class="container mx-auto px-4 lg:px-8 max-w-content">
                <!-- Section Title -->
                <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-primary-text text-center mb-12 fade-in">
                    Lorem ipsum Dolor
                </h2>
                
                <!-- Grid of 4 Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                    
                    <!-- Card 1: Visi -->
                    <article class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-6 h-48 fade-in flex flex-col justify-center">
                        <div class="text-center">
                            <!-- Icon placeholder -->
                            <div class="w-12 h-12 bg-primary-blue/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary-text mb-2">Visi</h3>
                            <p class="text-sm text-primary-text/60">Lorem ipsum dolor</p>
                        </div>
                    </article>

                    <!-- Card 2: Misi -->
                    <article class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-6 h-48 fade-in flex flex-col justify-center" style="transition-delay: 0.1s;">
                        <div class="text-center">
                            <!-- Icon placeholder -->
                            <div class="w-12 h-12 bg-primary-blue/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary-text mb-2">Misi</h3>
                            <p class="text-sm text-primary-text/60">Lorem ipsum dolor</p>
                        </div>
                    </article>

                    <!-- Card 3: Program -->
                    <article class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-6 h-48 fade-in flex flex-col justify-center" style="transition-delay: 0.2s;">
                        <div class="text-center">
                            <!-- Icon placeholder -->
                            <div class="w-12 h-12 bg-primary-blue/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary-text mb-2">Program</h3>
                            <p class="text-sm text-primary-text/60">Lorem ipsum dolor</p>
                        </div>
                    </article>

                    <!-- Card 4: Nilai -->
                    <article class="bg-white rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-6 h-48 fade-in flex flex-col justify-center" style="transition-delay: 0.3s;">
                        <div class="text-center">
                            <!-- Icon placeholder -->
                            <div class="w-12 h-12 bg-primary-blue/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold text-primary-text mb-2">Nilai</h3>
                            <p class="text-sm text-primary-text/60">Lorem ipsum dolor</p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- Section 2: Dark Section with Large Blue Card -->
        <section id="tentang-organisasi" class="py-12 lg:py-16 bg-dark-section">
            <div class="container mx-auto px-4 lg:px-8 max-w-content">
                <!-- Large Feature Card -->
                <article class="bg-primary-blue rounded-3xl shadow-2xl p-8 lg:p-12 scale-in">
                    <div class="max-w-3xl">
                        <h3 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-white leading-tight mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </h3>
                        
                        <!-- Content area with more detail -->
                        <div class="space-y-4 text-white/90 leading-relaxed">
                            <p class="text-base lg:text-lg">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                            </p>
                            
                            <!-- Stats or highlights -->
                            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8 pt-8 border-t border-white/20">
                                <!-- Stat 1 -->
                                <div class="text-center">
                                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 counter" data-target="150">0</div>
                                    <div class="text-sm text-white/80">Anggota Aktif</div>
                                </div>
                                
                                <!-- Stat 2 -->
                                <div class="text-center">
                                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 counter" data-target="25">0</div>
                                    <div class="text-sm text-white/80">Program Kerja</div>
                                </div>
                                
                                <!-- Stat 3 -->
                                <div class="text-center">
                                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 counter" data-target="10">0</div>
                                    <div class="text-sm text-white/80">Tahun Berdiri</div>
                                </div>
                                
                                <!-- Stat 4 -->
                                <div class="text-center">
                                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2 counter" data-target="50">0</div>
                                    <div class="text-sm text-white/80">Kegiatan/Tahun</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <!-- Section 3: Three Blue Cards with Text Below -->
        <section id="program-unggulan" class="py-12 lg:py-16 bg-light-blue-bg">
            <div class="container mx-auto px-4 lg:px-8 max-w-content">
                <!-- Section Title & Subtitle -->
                <div class="text-center mb-12">
                    <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-primary-text mb-4 fade-in">
                        Lorem ipsum Dolor
                    </h2>
                    <p class="text-base lg:text-lg text-primary-text/70 fade-in">
                        Lorem ipsum dolor sit amet, consectetur
                    </p>
                </div>

                <!-- Grid of 3 Cards (Vertical on mobile) -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
                    
                    <!-- Blue Card 1 -->
                    <article class="fade-in">
                        <div class="bg-primary-blue rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 lg:p-8 h-48 flex flex-col justify-end overflow-hidden relative group">
                            <!-- Background pattern or image can go here -->
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-blue to-primary-blue/80 group-hover:scale-105 transition-transform duration-300"></div>
                            
                            <!-- Content -->
                            <div class="relative z-10">
                                <h4 class="text-lg lg:text-xl font-semibold text-white">
                                    Lorem ipsum dolor sit amet, consectetur
                                </h4>
                            </div>
                        </div>
                        
                        <!-- Text below card -->
                        <div class="mt-4 text-center">
                            <p class="text-sm lg:text-base text-primary-text/80">
                                Lorem ipsum dolor sit amet, consectetur
                            </p>
                        </div>
                    </article>

                    <!-- Blue Card 2 -->
                    <article class="fade-in" style="transition-delay: 0.1s;">
                        <div class="bg-primary-blue rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 lg:p-8 h-48 flex flex-col justify-end overflow-hidden relative group">
                            <!-- Background pattern or image can go here -->
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-blue to-primary-blue/80 group-hover:scale-105 transition-transform duration-300"></div>
                            
                            <!-- Content -->
                            <div class="relative z-10">
                                <h4 class="text-lg lg:text-xl font-semibold text-white">
                                    Lorem ipsum dolor sit amet, consectetur
                                </h4>
                            </div>
                        </div>
                        
                        <!-- Text below card -->
                        <div class="mt-4 text-center">
                            <p class="text-sm lg:text-base text-primary-text/80">
                                Lorem ipsum dolor sit amet, consectetur
                            </p>
                        </div>
                    </article>

                    <!-- Blue Card 3 -->
                    <article class="fade-in md:col-span-2 lg:col-span-1" style="transition-delay: 0.2s;">
                        <div class="bg-primary-blue rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 lg:p-8 h-48 flex flex-col justify-end overflow-hidden relative group">
                            <!-- Background pattern or image can go here -->
                            <div class="absolute inset-0 bg-gradient-to-br from-primary-blue to-primary-blue/80 group-hover:scale-105 transition-transform duration-300"></div>
                            
                            <!-- Content -->
                            <div class="relative z-10">
                                <h4 class="text-lg lg:text-xl font-semibold text-white">
                                    Lorem ipsum dolor sit amet, consectetur
                                </h4>
                            </div>
                        </div>
                        
                        <!-- Text below card -->
                        <div class="mt-4 text-center">
                            <p class="text-sm lg:text-base text-primary-text/80">
                                Lorem ipsum dolor sit amet, consectetur
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </section>

        <!-- Optional: CTA Section -->
        <section class="py-12 lg:py-16 bg-primary-bg">
            <div class="container mx-auto px-4 lg:px-8 max-w-content">
                <div class="bg-gradient-to-r from-primary-blue to-primary-blue/90 rounded-3xl shadow-xl p-8 lg:p-12 text-center scale-in">
                    <h2 class="text-2xl lg:text-3xl font-bold text-white mb-4">
                        Bergabung Bersama Kami
                    </h2>
                    <p class="text-base lg:text-lg text-white/90 mb-6 max-w-2xl mx-auto">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Jadilah bagian dari keluarga besar mahasiswa Bengkalis di Jakarta.
                    </p>
                    <a href="#gabung" class="inline-block px-8 py-3 bg-white text-primary-blue rounded-full hover:bg-light-blue-bg transition-all duration-300 font-semibold shadow-lg hover:shadow-xl hover:scale-105">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer will be included via PHP -->
    <?php include 'footer.html'; ?>

    <!-- JavaScript for Profil Page -->
    <script src="public/js/animations.js"></script>
    <script src="public/js/profil.js"></script>

</body>
</html>