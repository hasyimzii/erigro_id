<?php 

class BibitModel {
    private $table = 'pengajuan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getPengajuan() {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }

    public function getPengajuanId($id) {
        $this->db->query('SELECT * FROM '. $this->table .'WHERE idPengajuan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function storePengajuan($data) {
        $query = "INSERT INTO $this->table VALUES('', :idProfil, :idBibit, :jumlahPengajuan, :tujuan, :luasLahan, :statusPengajuan, :tanggal)";
        $this->db->query($query);
        $this->db->bind('idProfil', $data['idProfil']);
        $this->db->bind('idBibit', $data['idBibit']);
        $this->db->bind('jumlahPengajuan', $data['jumlahPengajuan']);
        $this->db->bind('tujuan', $data['tujuan']);
        $this->db->bind('luasLahan', $data['luasLahan']);
        $this->db->bind('statusPengajuan', $data['statusPengajuan']);
        $this->db->bind('tanggal', $data['tanggal']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateStatusPengajuan($data) {
        $query = "UPDATE $this->table SET statusPengajuan=:statusPengajuan WHERE idPengajuan=:id";
        $this->db->query($query);
        $this->db->bind('statusPengajuan', $data['statusPengajuan']);

        $this->db->execute();
        return $this->db->rowCount();
    }
}