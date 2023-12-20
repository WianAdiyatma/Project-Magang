<?php
include('../../conf/config.php');
$id = $_GET['id'];
$skor = $_GET['tahun'];
$query = mysqli_query($koneksi,"UPDATE tahun SET tahun='$tahun' WHERE id='$id'");
header('Location: ../index.php?page=data-tahun-penilaian');
?>