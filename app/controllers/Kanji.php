<?php

class Kanji extends Controller{
    public function index()
    {
        $data['judul'] = 'Kanji';
        $data['kanji'] = $this->model('Kanji_model')->getAllKanji();
        $this->view('templates/header', $data);
        $this->view('kanji/index', $data);
        $this->view('templates/footer');
    }

    public function Tambah()
    {
        if( $this->model('Koleksi_model')->tambahKoleksi($_POST) > 0) {
            Flasher::setFlash('berhasil' , 'ditambahkan' , 'success' , 'koleksi');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('gagal' , 'ditambahkan' , 'danger' , 'koleksi');
            header('Location: ' . BASEURL);
            exit;
        }
    }
}
?>