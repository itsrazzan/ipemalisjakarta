// File: tailwind.config.js (Buat manual di root proyek)

/** @type {import('tailwindcss').Config} */
module.exports = {
  // Ini adalah bagian TERPENTING untuk sistem MVC Anda
  content: [
    // Memindai SEMUA file .php dan .js di dalam folder src/ (Views, Controllers, dll.)
    "./src/**/*.{php,js}", 
    
    // Memindai file entry point di public/
    "./public/**/*.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}