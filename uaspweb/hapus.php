<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data nuptk yang di kirim dari url
$nim = $_GET['nim'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from mahasiswa where nim='$nim'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>