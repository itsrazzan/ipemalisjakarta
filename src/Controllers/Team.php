<?php

namespace App\Controllers;
use App\Core\Controller;

class Team extends Controller {
    public function index() {
        
        $data ['title'] = "Our Team | IPEMALIS Jakarta";

        //memanggil view (template)
        $this -> view('templates/header', $data);
        $this -> view('team/index', $data);
        $this -> view('templates/footer');

    }
}
    
?>
