<?php

namespace App\Controllers;
use App\Core\Controller;

class profile extends Controller {
    public function index() {
        
        $data ['title'] = "Halaman Utama | IPEMALIS Jakarta";

        //memanggil view (template)
        $this -> view('templates/header', $data);
        $this -> view('profile/index', $data);
        $this -> view('templates/footer');

    }
}
    
?>