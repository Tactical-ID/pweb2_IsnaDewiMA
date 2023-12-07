<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/UserController.php';
require '../../index.php';

//instansiasi class database
$database = new database;
$db = $database->getKoneksi();


if (isset($_GET['id_user'])) {
    $id_user = $_GET['id_user'];

    $userController = new UserController($db);
    $userData = $userController->getUserById($id_user);

    if ($userData) {
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $username = $_POST['username'];
            $alamat = $_POST['alamat'];
            $password = $_POST['password'];
            $level = $_POST['level'];

            $result = $userController->updateUser($id_user, $nama, $username, $alamat, $password, $level);

            if ($result) {
                header("location:user");
            } else {
                header("location:editUser");
            }
        }
    } else {
        echo "User tidak ditemukan";
    }
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="px-4 py-8">

        <h3 class="py-3">Edit Data User</h3>
        <?php
       if ($userData) {
       ?>
           <form action="" method="post">
           <?php
               foreach ($userData as $d => $value) {
                   if ($d === 'level') {
                       ?>
                       <div class="mb-3">
                           <label for="<?php echo $d ?>" class="form-label"><?php echo $d ?></label>
                           <select class="form-select" name="<?php echo $d ?>">
                               <option value="admin" <?php echo ($value === 'admin') ? 'selected' : ''; ?>>Admin</option>
                               <option value="pelanggan" <?php echo ($value === 'pelanggan') ? 'selected' : ''; ?>>Pelanggan</option>
                               <option value="pemilik" <?php echo ($value === 'pemilik') ? 'selected' : ''; ?>>Pemilik</option>
                           </select>
                       </div>
                       <?php
                   } else {
                       ?>
                   <div class="mb-3">
                       <label for="<?php echo $d ?>" class="form-label"><?php echo $d ?></label>
                       <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                   </div>
                    <?php
                          }       
               }
                    ?>
                    <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                </form>
                <?php
                }
                ?>
                </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>