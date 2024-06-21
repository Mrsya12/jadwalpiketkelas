<?php

include 'koneksi.php';

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function btn_search($search) {
    $query = "SELECT * FROM siswa WHERE nisn LIKE '$search' OR nama LIKE '%$search%'
    OR kelas LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR hari_piket LIKE '$search'";
    return query($query);
}

function btn_search2($search) {
    $query = "SELECT * FROM kehadiran_piket WHERE nisn LIKE '$search' OR nama_siswa LIKE '%$search%'
    OR kelas LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR hari_piket LIKE '$search' OR status_kehadiran LIKE '$search' OR alasan_tidak_piket LIKE '$search' ";
    return query($query);
}
?>