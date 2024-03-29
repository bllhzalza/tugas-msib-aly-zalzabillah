<?php

class siswa_model {
    private $table = 'data_siswa';
    private $db;
    
    public function __construct() {
         $this->db = new Database;
    }

    public function getAllSiswa() { 
         $this->db->query("SELECT * FROM " . $this->table);
         return $this->db->resultAll();
    }
    public function getSiswaById($id) {
         $this->db->query("SELECT * FROM " . $this->table . ' WHERE id = :id');
         $this->db->bind('id', $id);
         return $this->db->resultSingle();
     }

     public function buatSiswa ($data) {

          $query = "INSERT INTO data_siswa VALUES
          ('', :nama, :TTL, :jenis_kelamin, :alamat, :asal_sekolah)";
          $this->db->query($query);
          $this->db->bind('nama', $data['nama']);
          $this->db->bind('TTL', $data['TTL']);
          $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
          $this->db->bind('alamat', $data['alamat']);
          $this->db->bind('asal_sekolah', $data['asal_sekolah']);
          $this->db->execute();
          return $this->db->rowCount();
      }

      public function updateSiswa($data) {
          $query = "UPDATE data_siswa SET
          nama = :nama, 
          TTL = :TTL, 
          jenis_kelamin = :jenis_kelamin, 
          alamat = :alamat, 
          asal_sekolah = :asal_sekolah
          WHERE id = :id";

          $this->db->query($query);
          $this->db->bind('nama', $data['nama']);
          $this->db->bind('TTL', $data['TTL']);
          $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
          $this->db->bind('alamat', $data['alamat']);
          $this->db->bind('asal_sekolah', $data['asal_sekolah']);
          $this->db->bind('id', $data['id']);

          $this->db->execute();
          return $this->db->rowCount();
      }

      public function hapusSiswa ($id) {
          $query = "DELETE FROM data_siswa WHERE id = :id";
          $this->db->query($query);
          $this->db->bind('id', $id);
          $this->db->execute();
          return $this->db->rowCount();
      }

}

?>