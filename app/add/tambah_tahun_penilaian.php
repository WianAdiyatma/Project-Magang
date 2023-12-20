<?php
include('../../conf/config.php');
$divisi = $_GET['tahun'];
$query = mysqli_query($koneksi,"INSERT INTO tahun (id,tahun) 
VALUES('','$tahun')");
header('Location: ../index.php?page=data-tahun_penilaian');
?>