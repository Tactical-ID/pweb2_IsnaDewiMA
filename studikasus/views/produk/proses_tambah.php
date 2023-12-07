<?php

include_once '../../config.php';
include_once '../../controllers/ProdukController.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nama_produk = $_POST['nama_produk'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];

    $produkController = new ProdukController($db);
    $result = $produkController->createProduk($nama_produk, $jenis, $harga);

    if ($result) {
        header("location:produk");
    } else {
        header("location:tambah.php");
    }
}
?>