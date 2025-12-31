<?php

namespace App\Controllers;
use App\Core\Controller;

class Activities extends Controller {
    public function index() {
        //echo "<h1>Activities Controller - Index Method</h1>";
        //echo "<p>Welcome to the Activities page!</p>";
       
        $data ['title'] = "Halaman Utama | IPEMALIS Jakarta";

        //memanggil view (template)
        $this -> view('templates/header', $data);
        $this -> view('activities/index', $data);
        $this -> view('templates/footer');

    }
}
?>