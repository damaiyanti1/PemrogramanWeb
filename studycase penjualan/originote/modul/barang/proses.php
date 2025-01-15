<?php
$mysqli = new mysqli("localhost", "root", "", "skincare");
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}


if($_GET['action']=="insert"){
$id = $_POST['id'];
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$gambar= $_POST['gambar'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];
$query = "INSERT INTO barang (nama_produk,deskripsi,gambar,harga,stok) VALUES ('$nama_produk', '$deskripsi', '$gambar','$harga','$stok')";
$mysqli->query($query);
header('Location:modul/barang/index.php');

}elseif ($_GET['action']=="update"){
    $id = $_GET['id'];
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $gambar= $_POST['gambar'];
    $harga= $_POST['harga'];
    $stok= $_POST['stok'];
    $query = "UPDATE biodata SET nama_produk='$nama_produk', deskripsi='$deskripsi', gambar='$gambar', harga='$harga', stok='$stok' where id='$id'";
$mysqli->query($query);
    header('location:modul/barang/index.php');
    
}elseif ($_GET['action']=="delete") {
    $query = "DELETE FROM barang where id='$_GET[id]'";
$mysqli->query($query);
    header('Location:../../index.php');
}else{
    header('location:../../index.php');
}