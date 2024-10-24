<!DOCTYPE html>
<html>
<head>
<title>Sistem Pencatatan Data Penjualan</title>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: center;
}
</style>
</head>
<body>

<h1>Sistem Pencatatan Data Penjualan</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
  <label for="nama"> Nama Produk:</label>
  <input type="text" id="nama" name="nama"><br><br>
  <label for="harga"> Harga per Produk:</label>
  <input type="number" id="harga" name="harga"><br><br>
  <label for="jumlah">Jumlah Terjual:</label>
  <input type="number" id="jumlah" name="jumlah"><br><br>
  <input type="submit" value="Submit">
</br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $harga = $_POST["harga"];
  $jumlah = $_POST["jumlah"];
  $total = $harga * $jumlah;

  // Simpan data ke dalam database
  // ...

  // Tampilkan data
  "<h2>Laporan Penjualan</h2>";
   "<table>
  <tr>
    <th>Nama</th>
     <td>$nama</td>
    <th>Harga Per Produk</th> 
     <td>$harga</td>
    <th>Jumlah Terjual</th>
     <td>$jumlah</td>
    <th>Total</th>
     <td>$total</td>
  </tr>";
  "<tr>
    <td>$nama</td>
    <td>$harga</td>
    <td>$jumlah</td>
    <td>$total</td>
  </tr>";
  "</table>";
}
?>


<?php
// Data penjualan produk
$produk = [
    ['nama' => 'Produk A', 'harga' => 10000, 'jumlah' => 5],
    ['nama' => 'Produk B', 'harga' => 7500, 'jumlah' => 10],
    ['nama' => 'Produk C', 'harga' => 12000, 'jumlah' => 8]
];

// Fungsi untuk menghitung total penjualan per produk
function hitungTotalPenjualan($harga, $jumlah) {
    return $harga * $jumlah;
}

// Menghitung total semua penjualan
$totalSemuaPenjualan = 0;
$totalJumlahTerjual = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Penjualan</title>
</head>
<body>
    <h1>Sistem Pencatatan Data Penjualan</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Nama</th>
            <th>Harga Per Produk</th>
            <th>Jumlah Terjual</th>
            <th>Total</th>
        </tr>
        <?php foreach ($produk as $p): ?>
            <tr>
                <td><?php echo $p['nama']; ?></td>
                <td><?php echo number_format($p['harga'], 0, ',', '.'); ?></td>
                <td><?php echo $p['jumlah']; ?></td>
                <td><?php 
                    $total = hitungTotalPenjualan($p['harga'], $p['jumlah']);
                    echo number_format($total, 0, ',', '.'); 
                    $totalSemuaPenjualan += $total;
                    $totalJumlahTerjual += $p['jumlah'];
                ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="2"><strong>Total Penjualan</strong></td>
            <td><strong><?php echo $totalJumlahTerjual; ?></strong></td>
            <td><strong><?php echo number_format($totalSemuaPenjualan, 0, ',', '.'); ?></strong></td>
        </tr>
    </table>
</body>
</html>