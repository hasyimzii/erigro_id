<?php 

class Auth extends Controller {
    public function login() {
        $this->view('auth/login');
    }

    public function goLogin() {
        $this->model('UserModel')->goLogin($_POST);
        $this->view();
    }

    public function regist() {
        $this->view('auth/regist');
    }

    public function storeRegist() {
        if(isset($_POST['agree'])) {
            if($_POST['password'] === $_POST['confpass']) {
                if($this->model('UserModel')->storeRegist($_POST) === "0") {
                    Flasher::setFlash('Username sudah digunakan!', 'danger');
                    $this->view('auth/regist');
                    exit;
                }
                else {
                    $this->view('auth/login');
                }
            }
            else {
                Flasher::setFlash('Silahkan konfirmasi password dengan benar!', 'danger');
                $this->view('auth/regist');
                exit;
            }
        }
        else {
            Flasher::setFlash('Silahkan setujui kebijakan privasi!', 'danger');
            $this->view('auth/regist');
            exit;
        }
    }
}