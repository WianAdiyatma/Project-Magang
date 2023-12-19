<?php
include('../../conf/config.php');
$id = $_GET['id'];
$nama = $_GET['karyawan'];
$divisi = $_GET['divisi'];
$skor = $_GET['skor'];
$query = mysqli_query($koneksi,"UPDATE laporan SET karyawan='$nama',divisi='$divisi',skor='$skor' WHERE id='$id'");
header('Location: ../index.php?page=laporan-penilaian');
?>