<?php

include_once '../../models/User.php';

class UserController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new User($db);
    }

    public function getAllUser()
    {
        return $this->model->getAllUser();
    }

    public function createUser($nama, $username, $alamat, $password, $level)
    {
        return $this->model->createUser($nama, $username, $alamat, $password, $level);
    }

    public function getUserById($id_user)
    {
       return $this->model->getUserById($id_user);
    }

    public function updateUser($id_user, $nama, $username, $alamat, $password, $level)
    {
        return $this->model->updateUser($id_user, $nama, $username, $alamat, $password, $level);
    }

    public function deleteUser($id_user){
        return $this->model->deleteUser($id_user);
    }
}
