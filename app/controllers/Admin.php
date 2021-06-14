<?php 

class Admin extends Controller {
    public function index() {
        $data = $this->model('BibitModel')->getBibit();
        $this->view('admin/index', $data);
    }

    public function detailBibit($idBibit) {
        $id = decrypt($idBibit);
        $data = $this->model('BibitModel')->getBibitId($id);
        $this->view('admin/detailBibit', $data);
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