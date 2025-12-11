<?php
echo "Hello World from public/index.php";

// File: public/index.php

// 1. Definisikan Base Directory
define('BASEPATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
// Definisikan BASE_URL
define('BASE_URL', '/'); 

// 2. Load Autoloader atau Manual Load (sementara)
// Karena kita belum menggunakan Autoloader, kita load Routes secara manual
require_once BASEPATH . 'src/Core/Routes.php'; 


// 3. Buat Instance dan Jalankan Router
// Perhatikan Namespace-nya
$router = new App\Core\Routes();
$router->run();
?>
