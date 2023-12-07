<?php

class Produk{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllProduk(){
        $query="SELECT * FROM produk";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createProduk($nama_produk, $jenis, $harga){
        $query ="INSERT INTO produk (nama_produk, jenis, harga) 
        VALUES('$nama_produk', '$jenis','$harga')";
        $result=mysqli_query($this->koneksi,$query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getProdukById($id_produk)
    {
        $query="SELECT  nama_produk, jenis, harga FROM produk where id_produk=$id_produk";
        $result= mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateProduk($id_produk, $nama_produk, $jenis, $harga){
        $query="UPDATE produk set nama_produk='$nama_produk', jenis='$jenis', harga='$harga' where id_produk ='$id_produk' ";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduk($id_produk){
        $query = "DELETE FROM produk WHERE id_produk=$id_produk";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
          return true;  
        }else {
            return false;
        }
    }
}