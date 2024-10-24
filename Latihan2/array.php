<?php
$buah = array("apel","pisang","durian","semangka","pepaya","manggis");
foreach($buah as $buahan){
    echo $buahan.'<br>';
}
echo "<hr/>";

$siswa = array ("Nama" => "Joni", "Umur" => "25 Tahun", "Kota" => "Stabat", "Jurusan" => "Sistem Informasi");

echo 'Nama siswa :'.$siswa['Nama'].'<br/>';
echo 'Umur siswa :'.$siswa['Umur'].'<br/>';
echo 'Kota siswa :'.$siswa['Kota'].'<br/>';
echo 'Jurusan siswa :'.$siswa['Jurusan'].'<br/>';


echo "<hr/>";

$siswa = array ("Nama" => "Joni", "Umur" => "25 Tahun", "Kota" => "Stabat", "Jurusan" => "Sistem Informasi");
?>
<table border="1">
    <tr>
        <th>Nama Siswa</th>
        <th>Umur Siswa</th>
        <th>Kota Siswa</th>
        <th>Jurusan Siswa</th>
</tr>
<tr>
    <td><?=$siswa['Nama'];?></td>
    <td><?=$siswa['Umur'];?></td>
    <td><?=$siswa['Kota'];?></td>
    <td><?=$siswa['Jurusan'];?></td>
</tr>
</table>

 <hr/>
 <?php
 $nilai = array(
    array(90, 85, 88),
    array(78, 92, 87),
    array(65, 70, 75)
    );
    echo $nilai[0][0]; // Output: 90 (baris pertama, kolom pertama)
    ?>