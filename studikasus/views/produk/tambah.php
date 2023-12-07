<?php
require '../../index.php';
?>
<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="px-4 py-8">

        <h3 class="py-3">Tambah Data Produk</h3>
        <form action="proses_tambahProduk" method="post">

            <div>
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" name="nama_produk">
            </div>
            <div>
                <label for="jenis" class="form-label">Jenis</label>
                <input type="text" class="form-control" name="jenis">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="harga" class="form-label">Harga</label>
                <textarea class="form-control" name="harga" id_produk=""></textarea>
            </div>
   
            <button type="submit" name="submit" class="btn btn-success" onclick="showAlert()">Simpan</button>
</form>

<script>
    function showAlert() {
        alert("Data berhasil ditambah!");
    }
</script>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>