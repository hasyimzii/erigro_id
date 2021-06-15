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
        $this->db->query("SELECT * FROM $this->table WHERE idBibit=:id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function storeBibit($data) {
        $query = "INSERT INTO $this->table VALUES('', :bibit, :jumlahBibit, :jadwalAmbil)";
        $this->db->query($query);
        $this->db->bind('bibit', $data['bibit']);
        $this->db->bind('jumlahBibit', $data['jumlahBibit']);
        $this->db->bind('jadwalAmbil', $data['jadwalAmbil']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateBibit($data) {
        $query = "UPDATE $this->table SET bibit=:bibit, jumlahBibit=:jumlahBibit, jadwalAmbil=:jadwalAmbil WHERE idBibit=:id";
        $this->db->query($query);
        $this->db->bind('bibit', $data['bibit']);
        $this->db->bind('jumlahBibit', $data['jumlahBibit']);
        $this->db->bind('jadwalAmbil', $data['jadwalAmbil']);
        $this->db->bind('id', $data['idBibit']);

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