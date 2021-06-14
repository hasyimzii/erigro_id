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
}