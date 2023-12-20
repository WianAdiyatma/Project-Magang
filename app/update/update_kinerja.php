<?php
include('../../conf/config.php');
$id = $_GET['id'];
$divisi = $_GET['kinerja'];
$query = mysqli_query($koneksi,"UPDATE kinerja SET kinerja='$kinerja' WHERE id='$id'");
header('Location: ../index.php?page=data-kinerja');
?>