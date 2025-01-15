<?php
include "koneksi.php";
$query = "SELECT * FROM user";
$result = $mysqli->query($query);
if ($result->num_rows <=0) {
    $username = "admin";
    $nama_lengkap = "Administrator Web";
    $password = md5('123');
    $query = "INSERT INTO user (username,nama_lengkap,password) VALUES ('$username','$nama_lengkap','$password')";
    $mysqli->query($query);
    header('location:index.php');
}else{
    header('location:index.php');
}
?>