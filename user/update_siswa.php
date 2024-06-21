<?php 
 
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hari_piket = $_POST['hari_piket'];
 
mysqli_query($koneksi,"UPDATE siswa SET nisn = '$nisn', nama ='$nama', kelas='$kelas', jenis_kelamin='$jenis_kelamin', hari_piket='$hari_piket' WHERE  nisn='$nisn'");
 
header("location:home.php?pesan=update");
 
?>