<?php

class Koleksi extends Controller {

    public function detail($id)
    {
        $data['judul'] = 'Detail Koleksi';
        $data['koleksi'] = $this->model('Koleksi_model')->getKoleksiById($id);
        $this->view('templates/header', $data);
        if( $data['koleksi'] != null) {
            $this->view('koleksi/detail', $data);
        } else {
            $data['koleksi'] = $this->model('Koleksi_model')->getAllKoleksi();
            $this->view('words/new', $data);
        }
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

    public function Hapus($id)
    {
        if( $this->model('Koleksi_model')->hapusKoleksi($id) > 0) {
            Flasher::setFlash('berhasil' , 'dihapus' , 'success' , 'koleksi');
            header('Location: ' . BASEURL);
            exit;
        } else {
            Flasher::setFlash('gagal' , 'dihapus' , 'danger' , 'koleksi');
            header('Location: ' . BASEURL);
            exit;
        }
    }


}
?>