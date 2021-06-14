<?php 

class Admin extends Controller {
    public function index() {
        $this->view('admin/index');
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