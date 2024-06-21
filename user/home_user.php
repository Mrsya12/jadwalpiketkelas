<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>jadwalpiket</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">Data Siswa</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav class="navbar navbar-expand-lg" style="background-color: #9BBEC8; color: #fff;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home_user.php">siswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kehadiran_user.php">kehadiran</a>
      </ul>
      <!-- Tambahkan form pencarian di atas tabel -->
      <form action="home_user.php" method="post">

<label for="hari_piket">Pilih hari:</label>
<select name="hari_piket" id="hari_piket">
<option value=""></option>
    <option value="senin">senin</option>
    <option value="selasa">selasa</option>
    <option value="rabu">rabu</option>
    <option value="kamis">kamis</option>
    <option value="jum'at">jum'at</option>
</select>

<label>Cari :</label>
  <input type="text" name="cari">
    <input type="submit" value="Tampilkan">
</form>
<!-- Button -->
  </form>
    </div>
  </div>
</nav>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>DATA SISWA</h1>

  <main id="main">

    

    <div class="container d-md-flex py-4">
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>


</html>
	
	<br/>
	<div class="d-flex justify-content-center">
	</div>
	<br/>
	<br/>
	<table class="table table-bordered">
		<tr>
		<th style = "background-color:#9BBEC8; color: #fff">no</th>
			<th style = "background-color:#9BBEC8; color: #fff">nisn</th>
			<th style = "background-color:#9BBEC8; color: #fff">nama</th>
			<th style = "background-color:#9BBEC8; color: #fff">kelas</th>
			<th style = "background-color:#9BBEC8; color: #fff">jenis kelamin</th>
			<th style = "background-color:#9BBEC8; color: #fff">hari piket</th>
		</tr>
    <?php 
        include 'koneksi.php';
        // Pencarian
        $no = 1;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $selectedMonth = $_POST["hari_piket"];
            $keyword = $_POST["cari"];

            $data = mysqli_query($koneksi, "SELECT * FROM siswa  
                WHERE (hari_piket = '$selectedMonth' OR '$selectedMonth' = '')
                    AND (nama LIKE '%$keyword%')");
        } else {
            $data = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nama ASC");
        }
        
        while ($d = mysqli_fetch_array($data)) {
        ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nisn']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['kelas']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
        <td><?php echo $d['hari_piket']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>