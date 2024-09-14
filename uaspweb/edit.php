<!DOCTYPE html>
<html>
<head>
	<title>UAS PRAKTIKUM WEB</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
	<h2>UAS PRAKTIKUM WEB</h2>
	<br/>
	<a href="index.php" class="btn btn-outline-info">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where nim='$nim'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nim</td>
					<td>
						<input type="number" name="nim" value="<?php echo $d['nim']; ?>">
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Angkatan</td>
					<td><input type="number" name="angkatan" value="<?php echo $d['angkatan']; ?>"></td>
				</tr>
				<tr>
					<td>No Daftar</td>
					<td><input type="number" name="no_daftar" value="<?php echo $d['no_daftar']; ?>"></td>
				</tr>
				<tr>
					<td>Tarif SPI</td>
					<td><input type="number" name="tarif_spi" value="<?php echo $d['tarif_spi']; ?>"></td>
				</tr>
				<tr>
					<td>Tarif UKT Awal</td>
					<td><input type="number" name="tarif_ukt_awal" value="<?php echo $d['tarif_ukt_awal']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
</div>
</div>
</div>
</div>
</body>
</html>