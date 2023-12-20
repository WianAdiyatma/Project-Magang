<?php
include('../../conf/config.php');
$divisi = $_GET['kinerja'];
$query = mysqli_query($koneksi,"INSERT INTO kinerja (id,kinerja) 
VALUES('','$kinerja')");
header('Location: ../index.php?page=data-kinerja');
?>