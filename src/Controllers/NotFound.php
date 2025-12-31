<?php
namespace App\Controllers;
class NotFound {
    public function index() {
        http_response_code(404);
        echo "<h1>404 Not Found</h1>";
        echo "<p>The page you are looking for does not exist.</p>";
    }
}




?>