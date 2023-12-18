<?php
include('../../conf/config.php');
$nama = $_GET['kompetensi'];
$query = mysqli_query($koneksi,"INSERT INTO kompetensi (kompetensi) VALUES('','$kompetensi')");
header('Location: ../index.php?page=data-kompetensi');
?>