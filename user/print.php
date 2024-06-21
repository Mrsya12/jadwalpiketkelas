<!DOCTYPE html>
<html>
<body>
 
	<center>
 
		<h2>DATA KEHADIRAN SISWA</h2>
		
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nisn</th>
			<th>Nama siswa</th>
			<th>kelas</th>
			<th>jenis kelamin</th>
			<th>status kehadiran</th>
            <th>alasan tidak piket</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from kehadiran_piket");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nisn']; ?></td>
			<td><?php echo $data['nama_siswa']; ?></td>
			<td><?php echo $data['kelas']; ?></td>
			<td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['status_kehadiran']; ?></td>
			<td><?php echo $data['alasan_tidak_piket']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>