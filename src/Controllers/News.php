<?php

namespace App\Controllers;
use App\Core\Controller;

class News extends Controller {
    public function index() {
        
        $data ['title'] = "News | IPEMALIS Jakarta";

        //memanggil view (template)
        $this -> view('templates/header', $data);
        $this -> view('news/index', $data);
        $this -> view('templates/footer');

    }
}
    
?>
