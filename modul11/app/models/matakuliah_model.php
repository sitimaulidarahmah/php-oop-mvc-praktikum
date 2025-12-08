<?php 

class MataKuliah_model {
    private $table = 'matakuliah'; // tabel baru
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMataKuliah() {
        // Ambil semua data yang status aktif
        $this->db->query("SELECT * FROM {$this->table} WHERE status_id = 1 ORDER BY id DESC");
        return $this->db->resultSet();
    }

    public function getMataKuliahById($id) {
        // Ambil detail 1 data
        $this->db->query("SELECT * FROM {$this->table} WHERE id = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMataKuliah($data) {
        // Insert data
        $query = "INSERT INTO {$this->table} 
                    (kode_mk, nama_mk, sks, semester, status_id, created_at, updated_at)
                  VALUES 
                    (:kode_mk, :nama_mk, :sks, :semester, 1, NOW(), NOW())";

        $this->db->query($query);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('semester', $data['semester']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataMataKuliah($data) {
        // Update data
        $query = "UPDATE {$this->table} SET
                    kode_mk = :kode_mk,
                    nama_mk = :nama_mk,
                    sks = :sks,
                    semester = :semester,
                    updated_at = NOW()
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('kode_mk', $data['kode_mk']);
        $this->db->bind('nama_mk', $data['nama_mk']);
        $this->db->bind('sks', $data['sks']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataMataKuliah($id) {
        // Soft delete (status_id = 0)
        $query = "UPDATE {$this->table} SET status_id = 0, updated_at = NOW() WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}
