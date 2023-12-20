<?php
include('../../conf/config.php');
$divisi = $_GET['divisi'];
$query = mysqli_query($koneksi,"INSERT INTO divisi (id,divisi) 
VALUES('','$divisi')");
header('Location: ../index.php?page=data-divisi');
?>