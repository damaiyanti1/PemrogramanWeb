<?php
$mysqli = new mysqli("localhost", "root", "", "skincare");
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384- QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
<h5>Form Input Barang Daisa</h5>
     <hr> 
     <form action="modul/barang/proses.php?action=insert" method="post">
        <label for="nama_produk">Nama produk</label>
        <input type="text" class="form-control" name="nama_produk"><br>
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" name="deskripsi"/><br>
        <label for="gambar">Gambar</label>
        <input type="file" class="form-control" name="gambar" accept="image/*" /><br>
        <label for="harga">Harga</label>
        <input type="text" class="form-control" name="harga"/><br>
        <label for="stok">Stok</label>
        <input type="text" class="form-control" name="stok"/><br>
        </select>
        <br>
        <input type="submit" class="btn btn-dark" value="Simpan" />
    </form> 
    <?php

    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYfØtY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeH7 crossorigin="anonymous">
</script> 
</body>
</html>