<?php
include('../../conf/config.php');
$nama = $_GET['nama'];
$divisi = $_GET['divisi'];
$jabatan = $_GET['jabatan'];
$email = $_GET['email'];
$query = mysqli_query($koneksi,"INSERT INTO karyawan (id,nama,divisi,jabatan,email) 
VALUES('','$nama','$divisi','$jabatan','$email')");
header('Location: ../index.php?page=data-karyawan');
?>