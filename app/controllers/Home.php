<?php 

class Home extends Controller {
    public function index() {
        $data = $this->model('UserModel')->getUser();
        $this->view('home/index', $data);
    }

    public function profil() {
        var_dump(a);
    }

    public function pengajuan() {
        $this->view('home/pengajuan');
    }

    public function storePengajuan() {
        if($this->model('PengajuanModel')->storePengajuan($_POST)>0) {
            Flasher::setFlash('Data berhasil ditambahkan!', 'success');
            header('Location: '. BASEURL . '/home');
            exit;
        }
        else {
            Flasher::setFlash('Data gagal ditambahkan!', 'danger');
            header('Location: '. BASEURL . '/home');
            exit;
        }
    }
}