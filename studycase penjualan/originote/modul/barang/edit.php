<?php
$query = "SELECT * FROM barang WHERE id= $_GET[id]";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
    <h5>Edit Barang Daisa</h5>
</hr>
<form action="<?= 'modul/barang/proses.php?action=update&id='.$_GET['id'];?>" method="POST">
    <label for="nama_produk">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" value="<?= $row['nama_produk'];?>"/><br>
    <label for="deskripsi">Deskrpsi</label>
    <input type="text" class="form-control" name="deskripsi" value="<?= $row['deskripsi'];?>"/><br>
    <label for="gambar">Gambar</label>
    <input type="text" class="form-control" name="gambar" value="<?= $row['gambar'];?>"/><br>
    <label for="harga">Harga</label>
    <input type="text" class="form-control" name="harga" value="<?= $row['harga'];?>"/><br>
    <label for="stok">Stok</label>
    <input type="text" class="form-control" name="stok" value="<?= $row['stok'];?>"/><br>
</select>
    <br>
    <input type="submit" class="btn btn-secondary" value="Update" />
</form>