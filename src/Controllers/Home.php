<?php
//File : src/Controllers/Home.php
namespace App\Controllers;
use App\Core\Controller;

class Home extends Controller {
    //method default saat url hanya memanggil controller Home atau /
    public function index() {
        //echo "This is the Home controller's index method.";
        $data ['title'] = "Halaman Utama | IPEMALIS Jakarta";

        //memanggil view (template)
        $this -> view('templates/header', $data);
        $this -> view('home/index', $data);
        $this -> view('templates/footer');
    }



}

?>