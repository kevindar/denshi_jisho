<?php

class About extends Controller{
    public function index($nama='Kevin', $pekerjaan='Mahasiswa', $umur=20)
    {
        $data['nama'] = $this->model('User_model')->getUser();
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About app';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}
?>