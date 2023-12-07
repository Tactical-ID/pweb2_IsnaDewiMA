<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';
require '../../index.php';
 
//instansiasi class database
$database =new database;
$db = $database->getKoneksi();

$produkController = new ProdukController($db);
$produk = $produkController->getAllProduk();
?>

  <body>
 
<div class="px-5">

 <?php 
  error_reporting(E_ERROR | E_PARSE);

  if($_GET['success']==="tambah"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di Tambahkan!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['success']==="update"){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di Edit!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['success']==="hapus"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data Mahasiswa Berhasil Di hapus!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>

  <h3>Data Produk</h3>
<a href="tambahProduk"class="btn btn-primary mb-2 mt-2">Tambah Produk</a>
<br>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Harga</th>
        <th>Aksi</th> 
    </tr>
   
        <?php
        $no=1;
        foreach($produk as $x ){
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nama_produk'] ?></td>
            <td><?php echo $x['jenis'] ?></td>
            <td><?php echo $x['harga'] ?></td>
            <td>
            <a  class="btn btn-warning" href="editProduk?id_produk=<?php echo $x['id_produk']; ?>">Edit</a>
            <a class="btn btn-danger" href="hapusProduk?id_produk=<?php echo $x['id_produk']; ?>"
             onclick = "return confirm ('Apakah yakin akan menghapus..?')">Hapus</a>
        </td>
        </tr>
        <?php
        }
        ?>
</table>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>