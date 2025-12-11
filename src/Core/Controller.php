<?php
// File: src/Core/Controller.php
namespace App\Core;

class Controller 
{
    /**
     * Memuat file View dari folder src/views/
     * @param string $view Nama view dengan path relatif (misal: 'home/index' atau 'templates/header')
     * @param array $data Data yang akan diteruskan ke view
     */
    protected function view($view, $data = [])
    {

        // Pastikan BASE_URL tersedia di setiap view
        // if (!defined('BASE_URL')) {
        //     // Fallback jika BASE_URL belum didefinisikan (seharusnya tidak terjadi)
        //     $data['BASE_URL'] = ''; 
        // } else {
        //     // Tambahkan BASE_URL ke data yang diteruskan ke view
        //     $data['BASE_URL'] = BASE_URL; 
        // }

        // Ubah array $data menjadi variabel lokal ($title, $user, dll.)
        extract($data); 

        // Tentukan path absolut ke file view.
        // Asumsi struktur: Core -> .. -> src -> views
        $viewFile = __DIR__ . '/../Views/' . $view . '.php';

        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            // Ini adalah penanganan error sederhana jika view tidak ditemukan
            echo "Error: View file tidak ditemukan di $viewFile";
            die();
        }
    }
}