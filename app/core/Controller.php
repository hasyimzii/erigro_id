<?php 
class Controller {
    public function view($view, $data = []) {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    // encrypt id
    public function encrypt($sData){
        $id=(double)$sData*525325.24;
        return base64_encode($id);
    }
    // decrypt id
    public function decrypt($sData){
        $url_id=base64_decode($sData);
        $id=(double)$url_id/525325.24;
        return $id;
    }
}
