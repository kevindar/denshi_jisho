<?php

class Konten extends Controller {

    public function TambahKata()
    {
        if( $this->model('Words_model')->tambahKata($_POST) > 0) {
            Flasher::setFlash('berhasil' , 'ditambahkan' , 'success' , 'konten koleksi');
            header('Location: ' . BASEURL . '/koleksi/detail');
            exit;
        } else {
            Flasher::setFlash('gagal' , 'ditambahkan' , 'danger' , 'konten koleksi');
            header('Location: ' . BASEURL) . '/words/new';
            exit;
        }
    }
}

?>