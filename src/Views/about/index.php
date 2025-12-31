<!-- About Page - Main Content Only -->
<!-- Header & Footer already included via Controller -->
<main class="pt-20 lg:pt-24">
    
    <!-- Hero Section - About -->
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
                    <img src="<?php echo $BASE_URL; ?>/public/img/logo_IPEMALIS.png" 
                         alt="Logo IPEMALIS Jakarta - Ikatan Pemuda Mahasiswa Kabupaten Bengkalis" 
                         class="w-64 lg:w-80 xl:w-96 h-auto"
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Divider with gradient line -->
    <div class="w-full h-1 bg-gradient-to-r from-transparent via-yellow-400 to-transparent"></div>

    <!-- Section 1: Visi & Misi / Info Cards -->
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
                    
                    <div class="space-y-4 text-white/90 leading-relaxed">
                        <p class="text-base lg:text-lg">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p>
                        
                        <!-- Stats -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-8 pt-8 border-t border-white/20">
                            <div class="text-center">
                                <div class="text-3xl lg:text-4xl font-bold text-white mb-2">150+</div>
                                <div class="text-sm text-white/80">Anggota Aktif</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl lg:text-4xl font-bold text-white mb-2">25+</div>
                                <div class="text-sm text-white/80">Program Kerja</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl lg:text-4xl font-bold text-white mb-2">10+</div>
                                <div class="text-sm text-white/80">Tahun Berdiri</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl lg:text-4xl font-bold text-white mb-2">50+</div>
                                <div class="text-sm text-white/80">Kegiatan/Tahun</div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

</main>
