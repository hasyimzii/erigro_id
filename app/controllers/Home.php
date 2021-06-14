<?php 

class Home extends Controller {
    public function index() {
        $data = $this->model('UserModel')->getUser();
        $this->view('home/index', $data);
    }
}