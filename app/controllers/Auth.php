<?php 

class Auth extends Controller {
    public function index() {
        $this->view('auth/login');
    }

    public function regist() {
        $this->view('auth/regist');
    }
}