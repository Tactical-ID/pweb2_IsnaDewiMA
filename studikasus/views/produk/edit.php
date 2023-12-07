<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/ProdukController.php';
require '../../index.php';

//instansiasi class database
$database =new database;
$db = $database->getKoneksi();


if (isset($_GET ['id_produk'])) {
    $id_produk = $_GET ['id_produk'];

    $produkController = new ProdukController($db);
    $produkData = $produkController->getprodukById($id_produk);

    if ($produkData) {
        if (isset ($_POST['submit'])) {
            $nama_produk = $_POST['nama_produk'];
            $jenis = $_POST['jenis'];
            $harga = $_POST['harga'];
 
            $result = $produkController->updateProduk($id_produk, $nama_produk, $jenis, $harga);

            if ($result) {
                header("location:produk");
            } else {
                header("location:editProduk");
            }
        }
    } else {
        echo "Produk tidak ditemukan";
        }
}
?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="px-4 py-8">

        <h3 class="py-3">Edit Data Produk</h3>
        <?php
        if ($produkData) {
        ?>
            <form action="" method="post">
                <?php
                foreach ($produkData as $d => $value) {
                ?>
                    <div class="mb-3">
                        <label for="<?php echo $d ?>" class="form-label"><?php echo $d ?></label>
                        <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </div>
                <?php
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