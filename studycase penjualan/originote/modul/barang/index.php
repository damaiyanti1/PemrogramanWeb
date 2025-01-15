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
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h5>Daftar Barang Toko Daisa</h5>
        </div>
        <div class="col text-end">
        <a class="btn btn-primary" href="?modul=form-tambah">Tambah Barang</a>

        </div>
    </div>
    <table class="table table-bordered my-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM barang ORDER BY id ASC";
            $result = $mysqli->query($query);
            $no = 1;

            if ($result->num_rows == 0) {
                echo "<tr><td colspan='8' class='text-center'>Tidak ada data</td></tr>";
            } else {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$no}</td>
                        <td>{$row['id']}</td>
                        <td>{$row['nama_produk']}</td>
                        <td>{$row['deskripsi']}</td>
                        <td><img src='path/to/image/{$row['gambar']}' alt='Gambar' width='50'></td>
                        <td>{$row['harga']}</td>
                        <td>{$row['stok']}</td>
                        <td>
                            <!-- Tombol Edit -->
                            <a href='form-edit.php?id={$row['id']}' class='btn btn-sm btn-warning'>Edit</a>
                            
                            <!-- Tombol Hapus -->
                            <button class='btn btn-sm btn-danger' data-bs-toggle='modal' data-bs-target='#hapusModal{$row['id']}'>Hapus</button>
                            
                            <!-- Modal Hapus -->
                            <div class='modal fade' id='hapusModal{$row['id']}' tabindex='-1' aria-labelledby='hapusModalLabel{$row['id']}' aria-hidden='true'>
                                <div class='modal-dialog'>
                                    <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='hapusModalLabel{$row['id']}'>Konfirmasi Hapus</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body'>
                                            Apakah Anda yakin ingin menghapus barang <strong>{$row['nama_produk']}</strong>?
                                        </div>
                                        <div class='modal-footer'>
                                            <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Batal</button>
                                            <a href='proses-hapus.php?id={$row['id']}' class='btn btn-danger'>Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>";
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
