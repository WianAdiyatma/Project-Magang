<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['nama'];
$divisi = $_GET['divisi'];
$jabatan = $_GET['jabatan'];
$email = $_GET['email'];
$query = mysqli_query($koneksi,"UPDATE karyawan SET nama='$nama',divisi='$divisi',jabatan='$jabatan',email='$email' WHERE id='$id'");
header('Location: ../index.php?page=data-karyawan');
?>