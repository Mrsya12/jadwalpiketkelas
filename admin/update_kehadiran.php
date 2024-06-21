<?php 
 
include 'koneksi.php';
$nisn = $_POST['nisn'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hari_piket = $_POST['hari_piket'];
$status_kehadiran = $_POST['status_kehadiran'];
$alasan_tidak_piket = $_POST['alasan_tidak_piket'];

 
mysqli_query($koneksi,"UPDATE kehadiran_piket SET  nisn = '$nisn', nama_siswa ='$nama_siswa', kelas='$kelas', jenis_kelamin='$jenis_kelamin', hari_piket='$hari_piket', status_kehadiran='$status_kehadiran', alasan_tidak_piket='$alasan_tidak_piket' WHERE  nisn='$nisn'");
 
header("location:kehadiran.php?pesan=update");
 
?>