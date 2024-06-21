<!DOCTYPE html>
<html>
<head>
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>DATA PIKET SISWA XI PPLG A</title>
</head>
<body >
  <nav class="navbar navbar-expand-lg navbar-danger" style="background-color:#9BBEC8;">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold fs-4" href="home_admin.php"<CENTER><h2>EDIT DATA PIKET </h2></CENTER>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </div>
  </nav>
 
	<br/>
	<li><a href="home_admin.php" class="btn btn-success btn-sm">kembali</a></li>
	<br/>
	<br/>
	
	<?php
	include 'koneksi.php';
	$id = $_GET['nisn'];
	$data = mysqli_query($koneksi,"select * from siswa WHERE nisn='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="right">
		<div class="form-container">
		<form method="post" action="update_siswa.php">
			<table>
				<tr>
				<td>NISN</td>
					<td><input type="text" name="nisn" value="<?php echo $d['nisn']; ?>"></td>
				</tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>

				<tr>
					<td>kelas</td>
					<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
				</tr>
                <tr>
					<td>jenis kelamin</td>
					<td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
                <tr>
					<td>hari piket</td>
					<td><input type="text" name="hari_piket" value="<?php echo $d['hari_piket']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
	</div>
	</div>
		<?php 
	}
	?>
 
</body>
</html>