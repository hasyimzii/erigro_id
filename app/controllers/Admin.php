<?php 

class Admin extends Controller {
    public function index() {
        $data = $this->model('BibitModel')->getBibit();
        $this->view('admin/index', $data);
    }

    public function detailBibit($idBibit) {
        $id = $this->decrypt($idBibit);
        $data = $this->model('BibitModel')->getBibitId($id);
        $this->view('admin/detailBibit', $data);
    }

    public function createBibit() {
        $this->view('admin/createBibit');
    }

    public function storeBibit() {
        if($this->model('BibitModel')->storeBibit($_POST)>0) {
            Flasher::setFlash('Data berhasil ditambahkan!', 'success');
            header('Location: '. BASEURL . '/admin');
            exit;
        }
        else {
            Flasher::setFlash('Data gagal ditambahkan!', 'danger');
            header('Location: '. BASEURL . '/admin');
            exit;
        }
    }

    public function editBibit($idBibit) {
        $id = $this->decrypt($idBibit);
        $data = $this->model('BibitModel')->getBibitId($id);
        $this->view('admin/editBibit', $data);
    }

    public function updateBibit() {
        if($this->model('BibitModel')->updateBibit($_POST)>0) {
            Flasher::setFlash('Data berhasil diedit!', 'success');
            header('Location: '. BASEURL . '/admin');
            exit;
        }
        else {
            Flasher::setFlash('Data gagal diedit!', 'danger');
            header('Location: '. BASEURL . '/admin');
            exit;
        }
    }

    public function deleteBibit($idBibit) {
        $id = $this->decrypt($idBibit);
        if($this->model('BibitModel')->deleteBibit($id)>0) {
            Flasher::setFlash('Data berhasil dihapus!', 'success');
            header('Location: '. BASEURL . '/admin');
            exit;
        }
        else {
            Flasher::setFlash('Data gagal dihapus!', 'danger');
            header('Location: '. BASEURL . '/admin');
            exit;
        }
    }

    public function pengajuanInstansi() {
        $this->view('admin/pengajuanInstansi');
    }

    public function pengajuanKelompok() {
        $this->view('admin/pengajuanKelompok');
    }

    public function pengajuanPerorangan() {
        $this->view('admin/pengajuanPerorangan');
    }
}