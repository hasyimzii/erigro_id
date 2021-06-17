<?php 

class UserModel {
    private $table = 'user';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getUser() {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getLogin($data) {
        $this->db->query("SELECT * FROM $this->table WHERE username=:username && password=:password");
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        return $this->db->single();
    }

    public function storeRegist($data) {
        $this->db->query("SELECT * FROM $this->table WHERE username=:username");
        $this->db->bind('username', $data['username']);
        $check = $this->db->single();

        if($check != 0) {
            return "0";
        }
        else {
            $query = "INSERT INTO $this->table VALUES('', :username, :password, 'user', :namaLengkap, :noHp)";
            $this->db->query($query);
            $this->db->bind('username', $data['username']);
            $this->db->bind('password', $data['password']);
            $this->db->bind('namaLengkap', $data['namaLengkap']);
            $this->db->bind('noHp', $data['noHp']);
            
            return $this->db->execute();
        } 
    }
}