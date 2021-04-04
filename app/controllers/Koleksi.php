<?php

class Koleksi extends Controller {

    public function detail($id)
    {
        $data['judul'] = 'Detail Koleksi';
        $data['koleksi'] = $this->model('Koleksi_model')->getKoleksiById($id);
        $this->view('templates/header', $data);
        $this->view('koleksi/detail', $data);
        $this->view('templates/footer');
    }

}
?>