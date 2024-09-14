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
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa(nim,nama,angkatan,no_daftar,tarif_spi,tarif_ukt_awal) values('$nim','$nama','$angkatan','$no_daftar','$tarif_spi','$tarif_ukt_awal')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>