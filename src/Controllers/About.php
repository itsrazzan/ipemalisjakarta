<?php

namespace App\Controllers;
use App\Core\Controller;

class About extends Controller {
    public function index() {
        
        $data ['title'] = "About | IPEMALIS Jakarta";

        //memanggil view (template)
        $this -> view('templates/header', $data);
        $this -> view('about/index', $data);
        $this -> view('templates/footer');

    }
}
    
?>
