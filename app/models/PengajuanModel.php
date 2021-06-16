<?php 

class PengajuanModel {
    private $table = 'pengajuan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getPengajuan() {
        $this->db->query("SELECT * FROM $this->table INNER JOIN bibit ON pengajuan.idBibit = bibit.idBibit INNER JOIN profil ON pengajuan.idProfil = profil.idProfil");
        return $this->db->resultSet();
    }

    public function getPengajuanId($id) {
        $this->db->query('SELECT * FROM '. $this->table .'WHERE idPengajuan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function storePengajuan($data) {
        $query = "INSERT INTO $this->table VALUES('', :idProfil, :idBibit, :jumlahPengajuan, :tujuan, :luasLahan, 'menunggu_verifikasi', :tanggal)";
        $this->db->query($query);
        $this->db->bind('idProfil', $data['idProfil']);
        $this->db->bind('idBibit', $data['idBibit']);
        $this->db->bind('jumlahPengajuan', $data['jumlahPengajuan']);
        $this->db->bind('tujuan', $data['tujuan']);
        $this->db->bind('luasLahan', $data['luasLahan']);
        $this->db->bind('statusPengajuan', $data['statusPengajuan']);
        $this->db->bind('tanggal', date('Y-m-d H:i:s'));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePengajuan($id, $status) {
        $query = "UPDATE $this->table SET statusPengajuan=:statusPengajuan WHERE idPengajuan=:id";
        $this->db->query($query);
        $this->db->bind('statusPengajuan', $status);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}