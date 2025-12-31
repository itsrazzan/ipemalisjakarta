<?php

namespace App\Controllers;
use App\Core\Controller;

class Joinus extends Controller {
    public function index() {
        
        $data ['title'] = "Join Us | IPEMALIS Jakarta";

        //memanggil view (template)
        $this -> view('templates/header', $data);
        $this -> view('joinus/index', $data);
        $this -> view('templates/footer');

    }
}
    
?>
