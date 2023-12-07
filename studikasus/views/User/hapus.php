<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/UserController.php';

//instansiasi class database
$database =new database;
$db = $database->getKoneksi();

if(isset($_GET['id_user'])){
    $id_user=$_GET['id_user'];


    $userController=new UserController($db);
    $result=$userController->deleteUser($id_user);

    if ($result) {
        header("location:user");
    } else {
        echo "Gagal menghapus data";
    }
}