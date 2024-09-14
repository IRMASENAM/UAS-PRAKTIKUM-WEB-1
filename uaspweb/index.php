<!DOCTYPE html>
<html>
<head>
	<title>UAS PRAKTIKUM WEB</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="px-5">
	<h2>UAS PRAKTIKUM WEB</h2>
	<br/>
	<a href="tambah.php" class="btn btn-outline-primary">+ TAMBAH MAHASISWA</a></div>
	<br/>
	<br/>
	<div class="px-5 mt-0">
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Angkatan</th>
			<th>No Daftar</th>
			<th>No VA Daftar</th>
			<th>No VA UKT</th>
			<th>Tarif SPI</th>
			<th>Tarif UKT Awal</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nim']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['angkatan']; ?></td>
				<td><?php echo $d['no_daftar']; ?></td>
				<td><?php echo $d['no_va_daftar']; ?></td>
				<td><?php echo $d['no_va_ukt']; ?></td>
				<td><?php echo $d['tarif_spi']; ?></td>
				<td><?php echo $d['tarif_ukt_awal']; ?></td>
				<td>
					<a class="btn btn-outline-success" a href="edit.php?nim=<?php echo $d['nim']; ?>">EDIT</a>
					<a class="btn btn-outline-danger" a href="hapus.php?nim=<?php echo $d['nim']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	</div>
</body>
</html>