<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="border-bottom d-flex justify-content-between py-3">
    <h4>Data Kategori</h4>
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
        <i class="bi bi-plus"></i> Tambah Kategori</button>
<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kategori</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="modul/kategori/proses.php?aksi=tambah" method="post">
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label" for="namakategori">Nama Kategori</label>
                        <input class="form-control" type="text" name="namakategori" placeholder="Masukkan nama kategori" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="status">Status</label>
                        <select class="form-select" name="status">
                            <option value="" selected disabled>Pilih Status</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                            </select>
                    </div>
                </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
<table id="myTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql_kategori = "SELECT * FROM kategori ORDER BY id_kategori ASC";
        $result_kategori = $mysqli->query($sql_kategori);
        $no = 0;
        while ($row_kategori = $result_kategori->fetch_assoc()) {
            $no++;
        ?>
        <tr>
        <i class="bi bi-pencil-square"></i>`
            <td><?= $no; ?></td>
            <td><?= $row_kategori['nama_kategori']; ?></td>
            <td>
                <span class="badge <?= $row_kategori['status'] == 1 ? 'text-bg-success' : 'text-bg-danger'; ?>">
                    <?= $row_kategori['status'] == 1 ? 'Aktif' : 'Tidak Aktif'; ?>
                </span>
            </td>
            <td>
                <a href="" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $row_kategori['id_kategori']; ?>" class="text-info">
                    <i class="bi bi-pencil-square"></i>
                </a>
                <div class="modal fade" id="modalEdit<?= $row_kategori['id_kategori']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kategori</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="modul/kategori/proses.php?aksi=edit&id=<?= $row_kategori['id_kategori']; ?>" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label" for="namakategori">Nama Kategori</label>
                                        <input class="form-control" type="text" name="namakategori" placeholder="Masukkan nama kategori" value="<?= $row_kategori['nama_kategori']; ?>" required>
                                    </div>
                                    <div class="mb-3">
    <label class="form-label" for="status">Status</label>
    <select class="form-select" name="status">
        <option value="" selected disabled>Pilih Status</option>
        <option value="1" <?= $row_kategori['status'] == 1 ? 'selected' : ''; ?>>Aktif</option>
        <option value="0" <?= $row_kategori['status'] == 0 ? 'selected' : ''; ?>>Tidak Aktif</option>
    </select>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Ubah</button>
</div>

<a href="#" data-bs-toggle="modal" data-bs-target="#modalHapus<?= $row_kategori['id_kategori']; ?>" class="text-danger">
    <i class="bi bi-trash-fill"></i>
</a>

<div class="modal fade" id="modalHapus<?= $row_kategori['id_kategori']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin akan menghapus data kategori <?= $row_kategori['nama_kategori']; ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="modul/kategori/proses.php?aksi=hapus&id=<?= $row_kategori['id_kategori']; ?>" method="post">
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
<form action="modul/kategori/proses.php?aksi=hapus&id=<?= $row_kategori['id_kategori']; ?>" method="post">
    <button type="submit" class="btn btn-danger">Hapus</button>
</form>

</td>
</tr>
<?php 
} 
?>
</tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

