<?php 
include 'koneksi.php';
$nik = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hari_piket = $_POST['hari_piket'];
 
mysqli_query($koneksi,"insert into siswa values('$nik','$nama','$kelas','$jenis_kelamin','$hari_piket')");
 
header("location:index.php");
?>