<?php
  
  //mengambill data
  //$data = mysqli_query($conn, "SELECT * FROM barang");
  function tambahData($data){
    $conn = mysqli_connect("localhost","root","","web-kasir");
  
    if(!$conn){
      echo "koneksi gagal";
    }
    $query = "INSERT INTO barang 
        VALUES('',".$data['kode_barang'].",".$data['nama_barang'].",".$data['id_jenis'].",".$data['harga'].",".$data['stok_barang'].
        ")";
    $que = mysqli_query($conn,$query);
    if(mysqli_affected_rows($conn) > 0){
      echo "<script>alert('Tambah data sukses')</script>";
    }
  } 

?>