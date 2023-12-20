<?php
include('../../conf/config.php');
$id = $_GET['id'];
$divisi = $_GET['divisi'];
$query = mysqli_query($koneksi,"UPDATE divisi SET divisi='$divisi' WHERE id='$id'");
header('Location: ../index.php?page=laporan-divisi');
?>