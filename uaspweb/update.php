<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$no_daftar = $_POST['no_daftar'];
$tarif_spi = $_POST['tarif_spi'];
$tarif_ukt_awal = $_POST['tarif_ukt_awal'];
 
// update data ke database
mysqli_query($koneksi,"update mahasiswa set nim='$nim', nama='$nama', angkatan='$angkatan', no_daftar='$no_daftar', tarif_spi='$tarif_spi', tarif_ukt_awal='$tarif_ukt_awal' where nim='$nim'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>