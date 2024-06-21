<?php
include ('koneksi.php');

if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];

    $delete_query = "DELETE FROM kehadiran_piket WHERE nisn = $id";
    $koneksi->query($delete_query);
    header("Location: kehadiran_admin.php");
}
?>