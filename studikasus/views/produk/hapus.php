<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';

//instansiasi class database
$database =new database;
$db = $database->getKoneksi();

if(isset($_GET['id_produk'])){
    $id_produk=$_GET['id_produk'];


    $produkController=new ProdukController($db);
    $result=$produkController->deleteProduk($id_produk);

    if ($result) {
        header("location:produk");
    } else {
        echo "Gagal menghapus data";
    }
}