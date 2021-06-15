<?php 

class BibitModel {
    private $table = 'donasi';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getDonasi() {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getDonasiId($id) {
        $this->db->query('SELECT * FROM '. $this->table .'WHERE idDonasi=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}