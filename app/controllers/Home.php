<?php

class Home extends Controller {
    
    public function index()
    {
        $data['judul'] = 'Home';
        $data['koleksi'] = $this->model('Koleksi_model')->getAllKoleksi();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}

?>