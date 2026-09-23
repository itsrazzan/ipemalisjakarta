<main class="pt-20 lg:pt-24">

    <!-- HERO SECTION -->
    <section class="relative py-24 lg:py-32 overflow-hidden bg-dark-section">
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
                <span class="text-white text-sm font-medium tracking-wide uppercase">IPEMALIS Jakarta</span>
            </div>

            <h1 class="text-4xl lg:text-6xl xl:text-7xl font-bold text-white leading-tight mb-8 scale-in tracking-tight">
                Student <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-amber-300">Data Collection</span>
            </h1>

            <p class="mt-10 text-lg lg:text-xl text-white/70 leading-relaxed max-w-2xl mx-auto fade-in" style="transition-delay: 0.4s;">
                One data for the entire family of Bengkalis students in Jabodetabek — both those who have and have not yet joined IPEMALIS.
            </p>
        </div>
    </section>

    <!-- FORM SECTION -->
    <section class="py-20 lg:py-28 bg-light-blue-bg">
        <div class="container mx-auto px-4 lg:px-8 max-w-content">
            <div class="text-center mb-12 fade-in">
                <span class="inline-block py-1 px-3 rounded-full bg-white text-primary-blue border border-primary-blue/20 text-xs font-bold uppercase tracking-wider mb-4">
                    Registration Form
                </span>
                <h2 class="text-3xl lg:text-4xl font-bold text-primary-text">Bengkalis Student Data Form</h2>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden scale-in">
                <div class="bg-primary-blue text-white px-6 py-4 flex items-center gap-3">
                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                    <span class="font-medium">Formulir Pendataan Mahasiswa Bengkalis</span>
                </div>
                <iframe
                    class="w-full border-none"
                    style="min-height: 1550px;"
                    src="https://docs.google.com/forms/d/e/1FAIpQLSdH_Y-kqqBpdsopm7OuCLSOwH1XGQb5V4PzbPYs4dGoYLXYVA/viewform?embedded=true"
                    title="Bengkalis Student Registration Form">
                    Loading form...
                </iframe>
            </div>

            <p class="text-center text-sm text-primary-text/50 mt-8 fade-in">
                IPEMALIS activities and events forms will be added on this page when needed.
            </p>
        </div>
    </section>

</main>
