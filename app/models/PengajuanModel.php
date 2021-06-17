<?php 

class PengajuanModel {
    private $table = 'pengajuan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getPengajuanRiwayat($id) {
        $this->db->query("SELECT * FROM $this->table INNER JOIN bibit ON pengajuan.idBibit = bibit.idBibit INNER JOIN user ON pengajuan.idUser = user.idUser WHERE pengajuan.idUser=:id");
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getPengajuanUser() {
        $this->db->query("SELECT * FROM $this->table INNER JOIN bibit ON pengajuan.idBibit = bibit.idBibit INNER JOIN user ON pengajuan.idUser = user.idUser");
        return $this->db->resultSet();
    }

    public function getPengajuanId($id) {
        $this->db->query('SELECT * FROM '. $this->table .'WHERE idPengajuan=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function storePengajuan($data) {
        $query = "INSERT INTO $this->table VALUES('', :idUser, :idBibit, :jumlahPengajuan, :tujuan, :luasLahan, 'menunggu_verifikasi', :tanggal)";
        $this->db->query($query);
        $this->db->bind('idUser', $data['idUser']);
        $this->db->bind('idBibit', $data['idBibit']);
        $this->db->bind('jumlahPengajuan', $data['jumlahPengajuan']);
        $this->db->bind('tujuan', $data['tujuan']);
        $this->db->bind('luasLahan', $data['luasLahan']);
        $this->db->bind('tanggal', date('Y-m-d H:i:s'));

        $this->db->execute();
        
        $this->db->query('SELECT * FROM bibit WHERE idBibit=:id');
        $this->db->bind('id', $data['idBibit']);
        $bibitNow = $this->db->single();

        $res = intval($bibitNow['jumlahBibit']) - intval($data['jumlahPengajuan']);

        $query2 = "UPDATE bibit SET jumlahBibit=:jumlahBibit WHERE idBibit=:id";
        $this->db->query($query2);
        $this->db->bind('id', $data['idBibit']);
        $this->db->bind('jumlahBibit', $res);
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