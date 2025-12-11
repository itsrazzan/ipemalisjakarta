<?php
//file: src/Core/Routes.php

namespace App\Core; 

class Routes {

    protected $controller = 'Home'; // Default controller
    protected $method = 'index'; // Default method
    protected $params = []; // Default parameters
    // Gunakan path absolut berdasarkan lokasi file ini sehingga include selalu tepat
    protected $controllerPath = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'Controllers' . DIRECTORY_SEPARATOR; // Path ke folder Controllers

    // Konstruktor untuk inisialisasi kelas Routes
    public function __construct() {
        echo "<br> Hello World from core/Routes.php inside the Routes class<br>";
    //     $url = $this->parseURL();
    //   var_dump($url);
    }

    public function parseURL()
    {
    // 1. Ambil path dari REQUEST_URI. 
    // REQUEST_URI berisi path URL, misalnya '/profil' atau '/produk/123?q=test'
    if ( isset($_SERVER['REQUEST_URI']) ) {
        
        $url = $_SERVER['REQUEST_URI'];
        
        // 2. Bersihkan query string (data setelah tanda '?')
        $url = strtok($url, '?');

        // 3. Hapus leading dan trailing slash, dan sanitasi
        $url = trim($url, '/'); 
        $url = filter_var($url, FILTER_SANITIZE_URL);
        
        // 4. Pecah segmen URL dan return
        $url = explode('/', $url);
        
        // Hapus elemen array kosong yang mungkin terjadi
        $url = array_filter($url); 
        //reset keys setelah array_filter
        return array_values($url);
    }

    // Jika REQUEST_URI tidak ada (jarang), kembalikan array kosong atau default
    return [$this->controller]; 
    }

    public function run() 
    {
        require_once __DIR__ . '/Controller.php'; 
        $url = $this->parseURL();
        
        // --- 1. Controller Discovery ---
        
        
       if (isset($url[0]) && !empty($url[0])) { // Pastikan elemen pertama ada dan tidak kosong
            $controllerName = ucfirst($url[0]);
            $controllerFile = $this->controllerPath . $controllerName . '.php'; 
            
            if (file_exists($controllerFile)) {
                $this->controller = $controllerName; 
                unset($url[0]); //hanya unset jika file ditemukan
            } else {
                /// Jika file controller tidak ditemukan, gunakan NotFound controller
                $this->controller = 'NotFound';
                // Biarkan $this->controller tetap 'Home' jika file tidak ditemukan
            }
        }

        // Memuat file Controller (Hanya sementara, Autoloader lebih baik)
        require_once $this->controllerPath . $this->controller . '.php';
        
        // Buat instance dari Controller (PENTING: Gunakan Namespace!)
        $controllerClassName = 'App\\Controllers\\' . $this->controller;
        
        // Cek apakah class tersebut benar-benar ada (untuk menghindari Fatal Error)
        if (!class_exists($controllerClassName)) {
            // Lakukan penanganan error, misalnya memanggil controller 404
            die("Fatal Error: Controller class '$controllerClassName' tidak ditemukan.");
        }
        
        $this->controller = new $controllerClassName;

        // --- 2. Method Discovery ---

        if (isset($url[1]) && !empty($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1]; 
                unset($url[1]); 
            }
        }

        // --- 3. Parameter Assignment & Call ---

        // Reset keys setelah unset untuk mendapatkan parameter yang tersisa
        $this->params = $url ? array_values($url) : []; 
        
        // Panggil Controller & Method
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}

?>