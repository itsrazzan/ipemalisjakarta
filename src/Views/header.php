<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>IPEMALIS Jakarta</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
  <script>
    // Tailwind CSS versi 4.0 - customize if needed
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'blue-secondary': '#0A61C9',
            'secondary': '#A8D5E3',
          }
        }
      }
    }
  </script>
</head>
<body>
  <header class="bg-blue-secondary text-white">
    <div class="container mx-auto flex flex-wrap items-center justify-between px-1 py-2">
      <!-- Logo -->
      <a href="/" class="flex items-center text-white font-semibold text-lg whitespace-nowrap">
        <img src="../public/img/Logo_IPEMALIS.png" alt="IPEMALIS Jakarta Logo" class="h-12 mr-2" />
        IPEMALIS Jakarta
      </a>
      <!-- Navigation -->
      <nav class="hidden md:flex gap-6 font-semibold text-sm">
        <a href="#" class="hover:underline">Beranda</a>
        <div class="group relative cursor-pointer hover:underline">
          Profil
          <ul class="absolute left-0 top-full mt-1 w-40 bg-blue-secondary border border-secondary rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity">
            <li><a href="#" class="block px-4 py-2 hover:bg-secondary">Tentang Kami</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-secondary">Struktur</a></li>
            <li><a href="#" class="block px-4 py-2 hover:bg-secondary">Anggota</a></li>
          </ul>
        </div>
        <a href="kegiatan" class="group relative cursor-pointer hover:underline"> Kegiatan
        </a>
      
        <a href="#" class="hover:underline">Mari Gabung</a>
        <a href="#" class="hover:underline">Kontak</a>
      </nav>
      <!-- Language and Auth Buttons -->
      <div class="hidden md:flex items-center gap-3 text-xs font-semibold">
        <div class="flex gap-1 border border-white rounded-md px-2 py-1 cursor-pointer">
          <button class="hover:underline">ID</button>
          <span>|</span>
          <button class="hover:underline">EN</button>
        </div>
        <button class="bg-transparent hover:bg-white hover:text-blue-secondary border border-white rounded-full px-4 py-1 transition">Buat Akun</button>
        <button class="border-l border-white pl-4 hover:underline">Login</button>
      </div>
      <!-- Mobile menu button -->
      <button id="mobile-menu-button" class="md:hidden flex items-center px-3 py-2 border border-white rounded text-white hover:text-blue-secondary hover:bg-white transition">
        <svg class="fill-current h-4 w-4" viewBox="0 0 20 20">
          <path d="M0 3h20v2H0zM0 9h20v2H0zM0 15h20v2H0z" />
        </svg>
      </button>
    </div>

    <!-- Mobile menu items -->
    <nav id="mobile-menu" class="hidden md:hidden bg-blue-secondary px-4 pb-4">
      <a href="#" class="block py-2 border-b border-red-700 font-semibold">Beranda</a>
      <details class="group border-b border-red-700">
        <summary class="py-2 font-semibold cursor-pointer flex justify-between items-center">
          Profil
          <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" /></svg>
        </summary>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Sejarah</a>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Tim</a>
      </details>
      <details class="group border-b border-red-700">
        <summary class="py-2 font-semibold cursor-pointer flex justify-between items-center">
          Pengajar Muda
          <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" /></svg>
        </summary>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Program</a>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Pendaftaran</a>
      </details>
      <details class="group border-b border-red-700">
        <summary class="py-2 font-semibold cursor-pointer flex justify-between items-center">
          IMstitute
          <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" /></svg>
        </summary>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Kursus</a>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Workshop</a>
      </details>
      <details class="group border-b border-red-700">
        <summary class="py-2 font-semibold cursor-pointer flex justify-between items-center">
          Kemitraan
          <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" /></svg>
        </summary>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Corporate</a>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Donasi</a>
      </details>
      <a href="#" class="block py-2 border-b border-red-700 font-semibold">Mari Gabung</a>
      <details class="group border-b border-red-700">
        <summary class="py-2 font-semibold cursor-pointer flex justify-between items-center">
          Halo IM
          <svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7" /></svg>
        </summary>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Profil Saya</a>
        <a href="#" class="block py-1 pl-4 text-sm hover:underline">Logout</a>
      </details>
      <div class="flex gap-3 mt-2 text-xs font-semibold">
        <button class="border border-white rounded px-2 py-1 w-16">ID | EN</button>
        <button class="bg-transparent border border-white rounded px-4 py-1 w-full text-center hover:bg-white hover:text-blue-secondary transition">Buat Akun</button>
        <button class="border border-white rounded px-4 py-1 w-full text-center hover:underline">Login</button>
      </div>
    </nav>
  </header>

  <script>
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
