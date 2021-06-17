<?php 

class Home extends Controller {
    public function index() {
        $this->view('home/index');
    }

    public function landing() {
        $data = $this->model('BibitModel')->getBibit();
        $this->view('home/landing', $data);
    }

    public function riwayat() {
        $id = $this->decrypt($_SESSION['id']);
        $data = $this->model('PengajuanModel')->getPengajuanRiwayat($id);
        $this->view('home/riwayat', $data);
    }

    public function about() {
        $this->view('home/about');
    }

    public function storePengajuan() {
        if($this->model('PengajuanModel')->storePengajuan($_POST)>0) {
            Flasher::setFlash('Data berhasil ditambahkan!', 'success');
            header('Location: '. BASEURL . '/home/landing');
            exit;
        }
        else {
            Flasher::setFlash('Data gagal ditambahkan!', 'danger');
            header('Location: '. BASEURL . '/home/landing');
            exit;
        }
    }
}