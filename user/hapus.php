<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $delete_query = "DELETE FROM siswa WHERE nisn = $id";
    $koneksi->query($delete_query);
    header("Location: home.php");
}
?>



