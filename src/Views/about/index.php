<!-- About Page - Main Content Revision -->
<main class="pt-20 lg:pt-24">
    
    <!-- 1. HERO SECTION (Typographic, Dark Theme, No Logo) -->
    <section class="relative py-24 lg:py-32 overflow-hidden bg-dark-section">
        <!-- Abstract Background Lines -->
        <svg class="absolute inset-0 w-full h-full opacity-10 pointer-events-none" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <pattern id="grid-pattern" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M0 40L40 0H20L0 20M40 40V20L20 40" stroke="white" stroke-width="1" fill="none"/>
                </pattern>
            </defs>
            <rect width="100%" height="100%" fill="url(#grid-pattern)"/>
            <circle cx="90%" cy="10%" r="300" fill="#065996" filter="url(#blur-hero)"/>
            <defs>
                <filter id="blur-hero" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="80" />
                </filter>
            </defs>
        </svg>

        <div class="container mx-auto px-4 lg:px-8 max-w-4xl relative z-10 text-center">
            <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-md rounded-full px-4 py-1.5 mb-8 border border-white/10 fade-in">
                <span class="w-2 h-2 rounded-full bg-yellow-400 animate-pulse"></span>
                <span class="text-white text-sm font-medium tracking-wide uppercase">Profil Organisasi</span>
            </div>
            
            <h1 class="text-4xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight mb-8 scale-in tracking-tight">
                IPEMALIS <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-cyan-300">Jakarta</span>
            </h1>
            
            <div class="relative inline-block scale-in" style="transition-delay: 0.2s;">
                <span class="absolute -inset-1 bg-gradient-to-r from-yellow-400 to-orange-500 rounded-lg blur opacity-25"></span>
                <div class="relative text-xl lg:text-2xl font-mono text-white/90 bg-white/5 px-6 py-2 rounded-lg border border-white/10">
                    Kabinet Insan Utama Periode 2024 &mdash; 2025
                </div>
            </div>

            <p class="mt-10 text-lg lg:text-xl text-white/70 leading-relaxed max-w-2xl mx-auto fade-in" style="transition-delay: 0.4s;">
                Menjadi wadah pemersatu pemuda dan mahasiswa Kabupaten Bengkalis di perantauan, menjunjung tinggi nilai kedaerahan, dan berkontribusi nyata bagi pembangunan daerah.
            </p>
        </div>
    </section>

    <!-- 2. VISI & MISI (New Style: Statement Card & Numbered Grid) -->
    <section id="visi-misi" class="py-20 bg-white relative">
        <div class="container mx-auto px-4 lg:px-8 max-w-content">
            
            <!-- Visi Card (Full Width Statement) -->
            <div class="rounded-3xl bg-gradient-to-br from-primary-blue to-blue-800 p-8 lg:p-14 mb-12 shadow-2xl relative overflow-hidden scale-in">
                <div class="absolute top-0 right-0 p-8 opacity-10">
                     <svg class="w-32 h-32 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.516L20.297 19H3.703L12 5.516z"/></svg>
                </div>
                <div class="relative z-10 text-center">
                    <span class="inline-block py-1 px-4 rounded bg-white/20 text-white text-sm font-bold tracking-widest uppercase mb-6 backdrop-blur-sm">Visi Kami</span>
                    <h2 class="text-2xl lg:text-3xl xl:text-4xl font-serif text-white leading-relaxed">
                        &ldquo;Menjadi organisasi daerah yang aktif dalam meningkatkan kualitas sumber daya manusia serta memperkuat eksistensi organisasi melalui kolaborasi.&rdquo;
                    </h2>
                </div>
            </div>

            <!-- Misi Grid (Subtitle + Standard Grid) -->
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-primary-text mb-8 border-l-4 border-primary-blue pl-4">Misi Kami</h3>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <!-- Misi 1 -->
                    <div class="bg-primary-bg rounded-xl p-6 border border-gray-100 hover:border-blue-200 hover:bg-blue-50/50 transition-colors duration-300">
                        <div class="flex items-start space-x-4">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-primary-blue rounded-lg font-bold text-sm">01</span>
                            <div>
                                <h4 class="font-bold text-primary-text mb-2">SDM Berkualitas</h4>
                                <p class="text-sm text-primary-text/70 leading-relaxed">
                                    Meningkatkan kapasitas dan kualitas Sumber Daya Manusia (SDM) melalui kegiatan dan program yang relevan.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 2 -->
                    <div class="bg-primary-bg rounded-xl p-6 border border-gray-100 hover:border-blue-200 hover:bg-blue-50/50 transition-colors duration-300">
                        <div class="flex items-start space-x-4">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-primary-blue rounded-lg font-bold text-sm">02</span>
                            <div>
                                <h4 class="font-bold text-primary-text mb-2">Kolaborasi Strategis</h4>
                                <p class="text-sm text-primary-text/70 leading-relaxed">
                                    Membangun kolaborasi strategis dengan pemerintah maupun swasta untuk memperluas akses dan sumber daya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Misi 3 -->
                    <div class="bg-primary-bg rounded-xl p-6 border border-gray-100 hover:border-blue-200 hover:bg-blue-50/50 transition-colors duration-300">
                        <div class="flex items-start space-x-4">
                            <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center bg-blue-100 text-primary-blue rounded-lg font-bold text-sm">03</span>
                            <div>
                                <h4 class="font-bold text-primary-text mb-2">Identitas Daerah</h4>
                                <p class="text-sm text-primary-text/70 leading-relaxed">
                                    Menciptakan lingkungan organisasi yang proaktif sejalan dengan ciri khas kedaerahan Bengkalis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SEJARAH (Retained Style) -->
    <section id="sejarah" class="py-16 lg:py-24 bg-dark-section text-white overflow-hidden relative">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 32px 32px;"></div>
        
        <div class="container mx-auto px-4 lg:px-8 max-w-content relative z-10">
            <h2 class="text-2xl lg:text-3xl xl:text-4xl font-bold text-center mb-16 fade-in">
                Jejak Langkah <span class="text-yellow-400">Sejarah</span>
            </h2>

            <!-- Timeline Container -->
            <div class="relative">
                <!-- Vertical Line -->
                <div class="absolute left-4 lg:left-1/2 top-0 bottom-0 w-1 bg-white/20 transform lg:-translate-x-1/2"></div>

                <!-- 1999 Item -->
                <div class="relative flex flex-col lg:flex-row items-center mb-20 scale-in">
                    <!-- Dot -->
                    <div class="absolute left-4 lg:left-1/2 w-8 h-8 bg-yellow-400 rounded-full border-4 border-dark-section transform -translate-x-1/2 z-10 shadow-[0_0_15px_rgba(250,204,21,0.5)]"></div>
                    
                    <!-- Date (Left on Desktop) -->
                    <div class="lg:w-1/2 lg:pr-12 pl-16 lg:pl-0 w-full mb-4 lg:mb-0 lg:text-right">
                         <span class="text-5xl lg:text-7xl font-bold text-white/5 absolute lg:right-8 -top-8 select-none pointer-events-none">1999</span>
                         <h3 class="text-2xl font-bold text-yellow-400 mb-2 relative z-10">20 April 1999</h3>
                         <h4 class="text-xl font-semibold mb-2">Awal Pendirian</h4>
                    </div>

                    <!-- Content (Right on Desktop) -->
                    <div class="lg:w-1/2 lg:pl-12 pl-16 w-full">
                        <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors duration-300">
                             <p class="text-white/80 leading-relaxed text-sm lg:text-base mb-4">
                                IPEMALIS Jakarta berdiri pada 20 April 1999 sebagai wadah pemersatu pemuda dan mahasiswa Kabupaten Bengkalis di perantauan dengan menjunjung tinggi nilai kedaerahan, kekeluargaan, serta sosial kemasyarakatan.
                            </p>
                            <p class="text-white/80 leading-relaxed text-sm lg:text-base">
                                Di bawah arahan Alm. H. Abdul Karim, salah satu tokoh Bengkalis di Jakarta, organisasi ini meletakkan fondasi nilai dan semangat pengabdian. Periode 1999-2007 menjadi tonggak pembentukan karakter mandiri melalui swadaya kolektif.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 2007 Item -->
                <div class="relative flex flex-col lg:flex-row-reverse items-center mb-20 scale-in" style="transition-delay: 0.1s;">
                    <!-- Dot -->
                    <div class="absolute left-4 lg:left-1/2 w-8 h-8 bg-primary-blue rounded-full border-4 border-dark-section transform -translate-x-1/2 z-10"></div>
                    
                    <!-- Date (Right on Desktop) -->
                    <div class="lg:w-1/2 lg:pl-12 pl-16 lg:pl-0 w-full mb-4 lg:mb-0 lg:text-left">
                         <span class="text-5xl lg:text-7xl font-bold text-white/5 absolute lg:left-8 -top-8 select-none pointer-events-none">2007</span>
                         <h3 class="text-2xl font-bold text-primary-blue mb-2 relative z-10">Tahun 2007</h3>
                         <h4 class="text-xl font-semibold mb-2">Sekretariat Resmi</h4>
                    </div>

                    <!-- Content (Left on Desktop) -->
                    <div class="lg:w-1/2 lg:pr-12 pl-16 w-full">
                        <div class="bg-white/5 backdrop-blur-sm p-6 rounded-2xl border border-white/10 hover:bg-white/10 transition-colors duration-300">
                            <p class="text-white/80 leading-relaxed text-sm lg:text-base">
                                Sejak 2007, IPEMALIS Jakarta resmi bersekretariat di Mess Pemerintah Daerah Kabupaten Bengkalis Jakarta melalui skema pinjam pakai.
                            </p>
                            <p class="text-white/80 leading-relaxed text-sm lg:text-base mt-2">
                                Keberadaan sekretariat ini menjadi titik vital penguatan aktivitas, pendampingan pelajar, pusat koordinasi program, serta ruang pembinaan kader yang lebih terstruktur dan berkesinambungan.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- 2025 Item -->
                <div class="relative flex flex-col lg:flex-row items-center cursor-pointer group scale-in" style="transition-delay: 0.2s;">
                    <!-- Dot -->
                    <div class="absolute left-4 lg:left-1/2 w-8 h-8 bg-blue-500 rounded-full border-4 border-dark-section transform -translate-x-1/2 z-10 group-hover:scale-125 transition-transform duration-300"></div>
                    
                    <!-- Date (Left on Desktop) -->
                    <div class="lg:w-1/2 lg:pr-12 pl-16 lg:pl-0 w-full mb-4 lg:mb-0 lg:text-right">
                         <span class="text-5xl lg:text-7xl font-bold text-white/5 absolute lg:right-8 -top-8 select-none pointer-events-none">2025</span>
                         <h3 class="text-2xl font-bold text-blue-400 mb-2 relative z-10">Tahun 2025</h3>
                         <h4 class="text-xl font-semibold mb-2">Era Baru Berbadan Hukum</h4>
                    </div>

                    <!-- Content (Right on Desktop) -->
                    <div class="lg:w-1/2 lg:pl-12 pl-16 w-full">
                        <div class="bg-gradient-to-br from-primary-blue/30 to-blue-600/30 backdrop-blur-sm p-6 rounded-2xl border border-blue-400/30 group-hover:border-blue-400/60 transition-colors duration-300">
                            <p class="text-white/90 leading-relaxed text-sm lg:text-base">
                                Puncaknya pada 2025, IPEMALIS Jakarta resmi berbadan hukum. Fase ini menandai kedewasaan organisasi sekaligus mempertegas komitmen untuk memperkuat tata kelola, memperluas kemitraan, dan menghadirkan kontribusi nyata bagi pemuda, daerah, dan bangsa secara berkelanjutan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. PROGRAM UNGGULAN (New Clean/Detail Style) -->
    <section id="program" class="py-20 lg:py-28 bg-light-blue-bg">
        <div class="container mx-auto px-4 lg:px-8 max-w-content">
            <div class="text-center mb-20 fade-in">
                <span class="inline-block py-1 px-3 rounded-full bg-white text-primary-blue border border-primary-blue/20 text-xs font-bold uppercase tracking-wider mb-4">
                    Program Unggulan
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-primary-text">Action Plan 2024-2025</h2>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                <!-- Item 1: Legalitas -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-primary-blue/30 transition-colors duration-300">
                    <div class="flex gap-5">
                        <div class="flex-shrink-0 mt-1">
                             <div class="w-10 h-10 rounded-lg bg-blue-50 text-primary-blue flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                             </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-primary-text mb-2">Legalitas & Rekening</h3>
                            <p class="text-sm text-primary-text/70 leading-relaxed">
                                Pilar transparansi dan kepercayaan organisasi yang menjamin akuntabilitas seluruh administrasi serta tata kelola keuangan. Sebagai entitas yang telah berbadan hukum resmi, kami memastikan setiap dukungan dan kontribusi dikelola secara profesional.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Learning Center -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-yellow-400/30 transition-colors duration-300">
                    <div class="flex gap-5">
                        <div class="flex-shrink-0 mt-1">
                             <div class="w-10 h-10 rounded-lg bg-yellow-50 text-yellow-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                             </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-primary-text mb-2">IPEMALIS Learning Center</h3>
                            <p class="text-sm text-primary-text/70 leading-relaxed">
                                Pusat pengembangan intelektual dan peningkatan kompetensi SDM. Melalui pelatihan, diskusi ilmiah, dan penguatan hard/soft skills, mencetak kader unggul yang siap bersaing di dunia profesional.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Sanggar -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-red-400/30 transition-colors duration-300">
                    <div class="flex gap-5">
                        <div class="flex-shrink-0 mt-1">
                             <div class="w-10 h-10 rounded-lg bg-red-50 text-red-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 3-2 3 2zm0 0v-8"></path></svg>
                             </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-primary-text mb-2">Sanggar Tuah Seri Melayu</h3>
                            <p class="text-sm text-primary-text/70 leading-relaxed">
                                Wadah pelestarian budaya lokal. Mengasah kemahiran kompang, silat, tari, hingga MC Melayu. Berkomitmen menjaga marwah dan kelestarian warisan luhur Kabupaten Bengkalis di kancah nasional.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Halal Bihalal -->
                <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:border-green-400/30 transition-colors duration-300">
                    <div class="flex gap-5">
                        <div class="flex-shrink-0 mt-1">
                            <div class="w-10 h-10 rounded-lg bg-green-50 text-green-600 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-primary-text mb-2">Halal Bihalal Akbar</h3>
                            <p class="text-sm text-primary-text/70 leading-relaxed">
                                Forum silaturahmi strategis mahasiswa dengan tokoh pemerintah dan praktisi. Ruang diskusi untuk percepatan pembangunan Bengkalis sekaligus mempererat kekeluargaan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. RUANG LINGKUP (Zig-Zag Style Retained for Flow) -->
    <section id="ruang-lingkup" class="py-20 lg:py-28 bg-white">
        <div class="container mx-auto px-4 lg:px-8 max-w-content space-y-24">
            <div class="text-center mb-16 fade-in">
                <span class="inline-block py-1 px-3 rounded-full bg-primary-blue/10 text-primary-blue text-sm font-bold uppercase tracking-wider mb-2">Scope of Work</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-primary-text">Ruang Lingkup & Fokus</h2>
            </div>

            <!-- Item 1: Pendidikan (Image Left) -->
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16 slide-in-left">
                <div class="lg:w-1/2">
                    <div class="aspect-video bg-gray-100 rounded-3xl overflow-hidden relative group shadow-lg">
                        <img src="<?php echo $BASE_URL; ?>/img/about_pendidikan.webp" alt="Pendidikan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="lg:w-1/2">
                     <h3 class="text-2xl lg:text-3xl font-bold text-primary-text mb-4">Pendidikan & Pengembangan SDM</h3>
                     <p class="text-lg text-primary-text/80 leading-relaxed mb-6">
                         Fokus pada peningkatan kapasitas intelektual dan kompetensi mahasiswa melalui berbagai platform edukatif. Program ini mencakup penyelenggaraan Sharing Session, Seminar, Webinar, dan Workshop karier, serta penguatan minat baca melalui IPEMALIS Book Club untuk mencetak generasi yang berwawasan luas.
                     </p>
                     <ul class="space-y-2 mt-4 text-sm">
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Sharing Session</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Seminar & Webinar</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Workshop</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>IPEMALIS Book Club</li>
                     </ul>
                </div>
            </div>

            <!-- Item 2: Sosial (Image Right) -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-16 ">
                <div class="lg:w-1/2">
                    <div class="aspect-video bg-gray-100 rounded-3xl overflow-hidden relative group shadow-lg">
                        <img src="<?php echo $BASE_URL; ?>/img/about_sosial.webp" alt="Sosial" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 no-parallax">
                    </div>
                </div>
                <div class="lg:w-1/2">
                     <h3 class="text-2xl lg:text-3xl font-bold text-primary-text mb-4">Sosial & Keagamaan</h3>
                     <p class="text-lg text-primary-text/80 leading-relaxed mb-6">
                         Wujud pengabdian dan penguatan nilai spiritual mahasiswa di perantauan. Ruang lingkup ini meliputi Aksi Sosial kemasyarakatan, peringatan Hari Besar Islam, serta pendalaman iman melalui Kajian Keislaman & Kesekretariatan guna membangun karakter kader yang religius dan peduli sesama.
                     </p>
                     <ul class="space-y-2 mt-4 text-sm">
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Aksi Sosial</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Hari Besar Islam</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Kajian Keislaman</li>
                     </ul>
                </div>
            </div>

            <!-- Item 3: Budaya (Image Left) -->
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16 slide-in-left">
                <div class="lg:w-1/2">
                    <div class="aspect-video bg-gray-100 rounded-3xl overflow-hidden relative group shadow-lg">
                        <img src="<?php echo $BASE_URL; ?>/img/about_budaya.webp" alt="Budaya" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                </div>
                <div class="lg:w-1/2">
                     <h3 class="text-2xl lg:text-3xl font-bold text-primary-text mb-4">Budaya & Kesenian</h3>
                     <p class="text-lg text-primary-text/80 leading-relaxed mb-6">
                         Wadah penguatan identitas dalam memperkenalkan khazanah budaya daerah di kancah nasional. Mahasiswa difasilitasi untuk mengasah bakat dalam seni Kompang, Silat, dan Langgam Melayu, serta dibekali kepiawaian sebagai MC Melayu yang sesuai adat istiadat. Program ini berkomitmen menjaga marwah dan kelestarian warisan luhur Kabupaten Bengkalis agar tetap hidup di tanah perantauan.
                     </p>
                     <ul class="space-y-2 mt-4 text-sm">
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Kompang & Silat</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Langgam Melayu</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>MC Melayu</li>
                     </ul>
                </div>
            </div>

            <!-- Item 4: Olahraga (Image Right) -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-16 ">
                <div class="lg:w-1/2">
                    <div class="aspect-video bg-gray-100 rounded-3xl overflow-hidden relative group shadow-lg">
                        <img src="<?php echo $BASE_URL; ?>/img/about_olahraga.webp" alt="Olahraga" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 no-parallax">
                    </div>
                </div>
                <div class="lg:w-1/2">
                     <h3 class="text-2xl lg:text-3xl font-bold text-primary-text mb-4">Olahraga</h3>
                     <p class="text-lg text-primary-text/80 leading-relaxed mb-6">
                         Wadah penyaluran minat dan bakat untuk menjaga kebugaran serta sportivitas antaranggota. Program ini aktif menyelenggarakan kegiatan rutin seperti Fun Match untuk mempererat keakraban, hingga Turnamen kompetitif sebagai ajang prestasi mahasiswa Bengkalis di bidang olahraga.
                     </p>
                     <ul class="space-y-2 mt-4 text-sm">
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Fun Match</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Turnamen</li>
                        <li class="flex items-center text-primary-text/70"><span class="w-2 h-2 rounded-full bg-yellow-400 mr-2"></span>Sportivitas</li>
                     </ul>
                </div>
            </div>

        </div>
    </section>

</main>
