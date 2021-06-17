<?php 

class Auth extends Controller {
    public function index() {
        $this->view('auth/index');
    }

    public function login() {
        $this->view('auth/login');
    }

    public function getLogin() {
        $login = $this->model('UserModel')->getLogin($_POST);
        $count = count($login);
        if($count == 0) {
            Flasher::setFlash('Username tidak ditemukan!', 'danger');
            $this->view('auth/login');
            exit;
        }
        else {
            if (isset($_POST['remember'])){
				//set up cookie
				setcookie("username", $login['username'], time() + (86400 * 30)); 
				setcookie("password", $login['password'], time() + (86400 * 30)); 
			}
 
			$_SESSION['id'] = $this->encrypt(intval($login['idUser']));
			$_SESSION['username'] = $login['username'];

            if($login['hakAkses'] === 'user') {
                header('location: ../home/landing');
            }
            elseif($login['hakAkses'] === 'admin') {
                header('location: ../admin/index');
            }
            else {
                $this->view('auth/login');
                exit;
            }
        }
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
                    header('location: ../auth/login');
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

    public function logout() {
        session_destroy();
 
        if (isset($_COOKIE["username"]) AND isset($_COOKIE["password"])){
            setcookie("username", '', time() - (3600));
            setcookie("password", '', time() - (3600));
        }
        header('location: ../auth/login');
    }
}