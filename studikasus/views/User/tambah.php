<?php
require '../../index.php';
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

    <div class="px-4 py-8">

        <h3 class="py-3">Tambah Data Pelanggan</h3>
        <form action="proses_tambahUser" method="post">

            <div>
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div>
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id_user=""></textarea>
            </div>
            <div style="margin-bottom: 10px;">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id_user=""></textarea>
            </div>
            <tr>
		            <td>Level</td>
		            <td>
		            <select class="form-control" required="" name="level">
			            <option value="">-- Level --</option>
			            <option value="admin">Admin</option>
			            <option value="pelanggan">Pelanggan</option>
			            <option value="pemilik">Pemilik</option>
		            </select>
            		</td>
           		</tr>
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