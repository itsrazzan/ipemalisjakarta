<?php
namespace App\Controllers;
use App\Core\Controller;

class Datacollection extends Controller {
    public function index() {
        $data['title'] = "Data Collection | IPEMALIS Jakarta";
        $this->view('templates/header', $data);
        $this->view('datacollection/index', $data);
        $this->view('templates/footer');
    }
}
