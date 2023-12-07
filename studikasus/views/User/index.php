<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/UserController.php';
require '../../index.php';
 
//instansiasi class database
$database =new database;
$db = $database->getKoneksi();

$userController = new UserController($db);
$user = $userController->getAllUser();
?>

  <body>
 
<div class="px-5">

 <?php 
  error_reporting(E_ERROR | E_PARSE);

  if($_GET['success']==="tambah"){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data User Berhasil Di Tambahkan!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['success']==="update"){
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Data User Berhasil Di Edit!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }elseif($_GET['success']==="hapus"){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Data User Berhasil Di hapus!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>

  <h3>Data User</h3>
<a href="tambahUser"class="btn btn-primary mb-2 mt-2">Tambah User</a>
</br>
<table class="table">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Username</th>
        <th>Alamat</th>
        <th>Password</th>
        <th>Level</th>
        <th>Aksi</th> 
    </tr>
   
        <?php
        $no=1;
        foreach($user as $x ){
            ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nama'] ?></td>
            <td><?php echo $x['username'] ?></td>
            <td><?php echo $x['alamat'] ?></td>
            <td><?php echo $x['password'] ?></td>
            <td><?php echo $x['level'] ?></td>
            <td>
            <a  class="btn btn-warning" href="editUser?id_user=<?php echo $x['id_user']; ?>">Edit</a>
            <a class="btn btn-danger" href="hapusUser?id_user=<?php echo $x['id_user']; ?>"
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