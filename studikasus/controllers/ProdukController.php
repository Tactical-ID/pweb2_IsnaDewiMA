<?php

include_once '../../models/Produk.php';

class ProdukController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Produk($db);
    }

    public function getAllProduk()
    {
        return $this->model->getAllProduk();
    }

    public function createProduk($nama_produk, $jenis, $harga)
    {
        return $this->model->createProduk($nama_produk, $jenis, $harga);
    }

    public function getProdukById($id_produk)
    {
       return $this->model->getProdukById($id_produk);
    }

    public function updateProduk($id_produk, $nama_produk, $jenis, $harga)
    {
        return $this->model->updateProduk($id_produk, $nama_produk, $jenis, $harga);
    }

    public function deleteProduk($id_produk){
        return $this->model->deleteProduk($id_produk);
    }
}
