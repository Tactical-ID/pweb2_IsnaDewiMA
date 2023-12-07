<?php

class User{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllUser(){
        $query="SELECT * FROM user";
        $result=mysqli_query($this->koneksi,$query);
        return $result;
    }

    public function createUser($nama, $username, $alamat, $password, $level){
        $query ="INSERT INTO user (nama, username, alamat, password, level)
        VALUES('$nama', '$username', '$alamat', '$password', '$level')";
        $result=mysqli_query($this->koneksi,$query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getUserById($id_user)
    {
        $query="SELECT * FROM user where id_user=$id_user";
        $result= mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateUser($id_user, $nama, $username, $alamat, $password, $level){
        $query = "UPDATE user SET nama='$nama', username='$username', alamat='$alamat', password='$password', level='$level' WHERE id_user='$id_user'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
            return true;
        } else {
            return false;
        }
    }

    public function deleteUser($id_user){
        $query = "DELETE FROM user WHERE id_user=$id_user";
        $result = mysqli_query($this->koneksi, $query);
        if ($result){
          return true;  
        }else {
            return false;
        }
    }
}