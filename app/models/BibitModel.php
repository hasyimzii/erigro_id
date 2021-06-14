<?php 

class BibitModel {
    private $table = 'bibit';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getBibit() {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getBibitId($id) {
        $this->db->query('SELECT * FROM '. $this->table .'WHERE idBibit=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}