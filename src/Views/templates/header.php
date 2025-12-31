<?php 
// File: src/views/templates/header.php
// Pastikan variabel $data['title'] tersedia dari Controller

// Tentukan BASE_URL. Ini sangat penting untuk navigasi
// Asumsi proyek berada di http://localhost/MVC_TEST/
// Jika proyek Anda di root (http://localhost/), BASE_URL = ''
// Jika di subfolder (http://localhost/MVC_TEST/), BASE_URL = '/MVC_TEST'
// Anda harus mendefinisikan ini di public/index.php dan menyediakannya di $data
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($data['title']); ?></title>
    <meta name="description" content="IPEMALIS Jakarta adalah organisasi pemuda mahasiswa Bengkalis di Tangerang Selatan dan Ciputat. Wadah keluarga mahasiswa Bengkalis Jakarta untuk berkarya, berkreasi dan mengembangkan potensi pemuda daerah.">
    <meta name="keywords" content="ipemalis jakarta, organisasi pemuda mahasiswa bengkalis, mahasiswa bengkalis jakarta, organisasi mahasiswa tangerang selatan, organisasi mahasiswa ciputat, keluarga mahasiswa bengkalis, ikatan pemuda bengkalis, organisasi kreatif pemuda, mahasiswa bengkalis di jakarta, komunitas mahasiswa bengkalis, pemuda bengkalis jakarta, ikatan mahasiswa bengkalis jakarta, organisasi kepemudaan bengkalis, mahasiswa perantauan bengkalis">
    <meta name="author" content="IPEMALIS Jakarta">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Indonesian">
    <meta name="geo.region" content="ID-BT">
    <meta name="geo.placename" content="Tangerang Selatan, Ciputat">

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

    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/public/css/style.css">

    <style>
        * {
            font-family: 'Sora', sans-serif;
        }
        
        body {
            background-color: #F6FCFF;
        }

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

        /* Scroll to Top Button Styling */
        #scroll-to-top {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0 !important;
            border: none;
            cursor: pointer;
            line-height: 1 !important;
        }

        #scroll-to-top svg {
            display: block !important;
            margin: 0 !important;
            width: 24px !important;
            height: 24px !important;
        }
    </style>
</head>

<body class="antialiased">
<!-- Header Navigation -->
<header id="main-header" class="fixed top-0 left-0 w-full z-50 transition-all duration-300">
    <nav class="container mx-auto px-4 lg:px-8">
        <div class="flex items-center justify-between h-20 lg:h-24">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <img src="public/img/logo_IPEMALIS.png" alt="Logo IPEMALIS Jakarta - Ikatan Pemuda Mahasiswa Kabupaten Bengkalis" class="h-12 lg:h-16 w-auto">
                <div class="hidden lg:block">
                    <div class="text-sm lg:text-base font-bold text-[#02293D]">IPEMALIS Jakarta</div>
                    <div class="text-xs text-[#065996]">Pemuda Mahasiswa Bengkalis</div>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <ul class="hidden lg:flex items-center space-x-8 xl:space-x-12">
                <li><a href="#beranda" class="nav-link text-[#02293D] hover:text-[#065996] font-medium transition-colors duration-300">Beranda</a></li>
                <li><a href="#profil" class="nav-link text-[#02293D] hover:text-[#065996] font-medium transition-colors duration-300">Profil</a></li>
                <li><a href="#kegiatan" class="nav-link text-[#02293D] hover:text-[#065996] font-medium transition-colors duration-300">Kegiatan</a></li>
                <li><a href="#berita" class="nav-link text-[#02293D] hover:text-[#065996] font-medium transition-colors duration-300">Berita</a></li>
                <li><a href="#gabung" class="inline-block px-6 py-2.5 bg-[#065996] text-white rounded-full hover:bg-[#02293D] transition-all duration-300 font-medium shadow-md hover:shadow-lg">Gabung</a></li>
            </ul>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="lg:hidden p-2 rounded-lg hover:bg-[#E6EFFE] transition-colors duration-300" aria-label="Toggle mobile menu">
                <svg class="w-6 h-6 text-[#02293D]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path class="hamburger-top" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"></path>
                    <path class="hamburger-middle" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                    <path class="hamburger-bottom" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 18h16"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white shadow-lg rounded-b-2xl overflow-hidden">
            <ul class="py-4 space-y-1">
                <li><a href="#beranda" class="mobile-nav-link block px-6 py-3 text-[#02293D] hover:bg-[#E6EFFE] hover:text-[#065996] transition-colors duration-300 font-medium">Beranda</a></li>
                <li><a href="#profil" class="mobile-nav-link block px-6 py-3 text-[#02293D] hover:bg-[#E6EFFE] hover:text-[#065996] transition-colors duration-300 font-medium">Profil</a></li>
                <li><a href="#kegiatan" class="mobile-nav-link block px-6 py-3 text-[#02293D] hover:bg-[#E6EFFE] hover:text-[#065996] transition-colors duration-300 font-medium">Kegiatan</a></li>
                <li><a href="#berita" class="mobile-nav-link block px-6 py-3 text-[#02293D] hover:bg-[#E6EFFE] hover:text-[#065996] transition-colors duration-300 font-medium">Berita</a></li>
                <li class="px-6 py-3"><a href="#gabung" class="block text-center px-6 py-2.5 bg-[#065996] text-white rounded-full hover:bg-[#02293D] transition-all duration-300 font-medium">Gabung</a></li>
            </ul>
        </div>
    </nav>
</header>