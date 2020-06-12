<?php

class Kasir_model{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function tambahData($data){
        $query = "INSERT INTO barang VALUES('',:kode_barang,:nama_barang,:id_jenis,:harga,:stok_barang)";

        $this->db->query($query);
        $this->db->bind("kode_barang",$data["kode_barang"]);
        $this->db->bind("nama_barang",$data["nama_barang"]);
        $this->db->bind("id_jenis",$data["id_jenis"]);
        $this->db->bind("harga",$data["harga"]);
        $this->db->bind("stok_barang",$data["stok_barang"]);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getBarangByKode($kode){
        $query = "SELECT * FROM barang WHERE kode_barang=:kode_barang";

        $this->db->query($query);
        $this->db->bind("kode_barang",$kode);
        return json_encode($this->db->single());
    }
    public function getAllBarang(){
        $query = "SELECT * FROM barang b JOIN jenis j ON j.id_jenis = b.id_jenis";

        $this->db->query($query);
       
        return $this->db->resultSet();
    }
}