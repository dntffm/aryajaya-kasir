<?php
class Home extends Controller{
    public function index(){
        $this->view("Home/index");
    }

    public function tambahbarang(){
        $data["barang"] = $this->model("Kasir_model")->getAllBarang();
        $this->view("Home/data-barang",$data);
    }
    public function barangbaru(){
        
        $this->view("Home/tambah");
    }

    public function rekap(){
        $this->view("Home/rekap");
    }

    public function kasir(){
        $data["barang"] = $this->model("Kasir_model")->getAllbarang();
        $this->view("Home/kasir",$data);
    }

    public function insertTambahData(){
        if($this->model("Kasir_model")->tambahData($_POST) > 0 ){
            header("Location: ".BASE_URL);
        }
    }
    public function getBarangByKode(){
        $kode = $_POST["id"];
        echo $this->model("Kasir_model")->getBarangByKode($kode);
    }

    public function hapusBarang($id){
        if($this->model("Kasir_model")->hapusBarang($id) > 0){
            header("Location: ".BASE_URL."/Home/tambahbarang");
        }
    }
}