<?php

include_once '../../config.php';
include_once '../../controllers/UserController.php';

$database= new database();
$db=$database->getKoneksi();

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    $level = $_POST['level'];

    $userController = new UserController($db);
    $result = $userController->createUser($nama,$username,$alamat, $password, $level);

    if ($result) {
        header("location:user");
    } else {
        header("location:tambah.php");
    }
}
?>