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

    public function createBibit($data) {
        $query = "INSERT INTO bibit VALUES('', :bibit, :jumlahBibit, :jadwalAmbil)";
        $this->db->query($query);
        $this->db->bind('bibit', $data['bibit']);
        $this->db->bind('jumlahBibit', $data['jumlahBibit']);
        $this->db->bind('jadwalAmbil', $data['jadwalAmbil']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteBibit($id) {
        $query = "DELETE FROM $this->table WHERE idBibit=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}