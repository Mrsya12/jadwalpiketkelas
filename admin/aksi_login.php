<?php
session_start();
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $akun = "SELECT * FROM akun WHERE username = '$username' AND password = '$password'";
    $result = $koneksi->query($akun);

    if ($result->num_rows > 0) {
        $_SESSION["username"] = $username;
        header("Location: home.php");
    } else {
            $_SESSION['error'] = "Username atau password salah.";
            header("Location: login.php");
    }
}
?>