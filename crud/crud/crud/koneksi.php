<?php
$mysqli = new mysqli("localhost","root","","mahasiswa1");
if($mysqli->connect_error){
    die("koneksi gagal :".$mysqli->connect_error);
}