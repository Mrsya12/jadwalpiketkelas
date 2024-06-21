<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
        /* Styling untuk form */
        .form-container {
            width: 400px;
            margin: 0 auto;
            padding: 50px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #9BBEC8;
        }

        .form-container label {
            display: block;
            margin-bottom: 5px;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Styling untuk tata letak */
        .container {
            display: flex;
            justify-content: space-between;
        }

        .container .left {
            width: 70%; /* Lebar tabel */
        }

        .container .right {
            width: 30%; /* Lebar formulir */
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA SISWA </title>
</head>
<body >
  <nav class="navbar navbar-expand-lg navbar-danger" style="background-color:#9BBEC8;">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold fs-4" href="home.php">DATA SISWA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </div>
  </nav>
<li><a href="home_admin.php" class="btn btn-success btn-sm">kembali</a></li>
    <?php
include 'koneksi.php';

if (isset($_POST['nisn']) && isset($_POST['nama']) && isset($_POST['kelas']) && isset($_POST['jenis_kelamin']) && isset($_POST['hari_piket'])) {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
	$hari_piket = $_POST['hari_piket'];

    $query = "INSERT INTO siswa (nisn,nama,kelas,jenis_kelamin,hari_piket) VALUES ('$nisn', '$nama', '$kelas', '$jenis_kelamin','$hari_piket')";

    if (mysqli_query($koneksi, $query)) {
        echo "Siswa berhasil ditambahkan.";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
<div class="right">
            <div class="form-container">
                <h2>DATA SISWA</h2>
                <form action="tambah.php" method="post">
                    <label for="nama">NISN:</label>
                    <input type="text" id="nisn" name="nisn"><br>
                    <label for="no_hp">Nama:</label>
                    <input type="text" id="nama" name="nama"><br>
					<label for="no_hp">Kelas:</label>
                    <input type="text" id="kelas" name="kelas"><br>
                    <label for="alamat">Jenis Kelamin:</label>
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin"><br>
					<label for="alamat">Hari Piket:</label>
                    <input type="text" id="hari_piket" name="hari_piket"><br>
                    <input type="submit" value="Tambah">
                </form>
            </div>
        </div>
    </div>
</body>
</html>