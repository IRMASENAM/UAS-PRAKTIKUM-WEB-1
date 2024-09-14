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
	<h2 class="text-center">UAS PRAKTIKUM WEB</h2>
	<br/>
	<a href="index.php" class="btn btn-outline-secondary">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambahaksi.php">
	<div class="mb-3">
		<label for="nim" class="form-label">Nim</label>
		<input type="number" class="form-control" name="nim">
	</div>
	<div class="mb-3">
		<label for="nama" class="form-label">Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<div class="mb-3">
		<label for="angkatan" class="form-label">Angkatan</label>
		<input type="number" class="form-control" name="angkatan">
	</div>
	<div class="mb-3">
		<label for="no_daftar" class="form-label">No Daftar</label>
		<input type="number" class="form-control" name="no_daftar">
	</div>
	<div class="mb-3">
		<label for="tarif_spi" class="form-label">Tarif SPI</label>
		<input type="number" class="form-control" name="tarif_spi">
	</div>
	<div class="mb-3">
		<label for="tarif_ukt_awal" class="form-label">Tarif UKT Awal</label>
		<input type="number" class="form-control" name="tarif_ukt_awal">
	</div>
			<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</div>
</div>
</div>
</div>
</body>
</html>