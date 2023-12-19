<?php
include('../../conf/config.php');
$id = $_GET['id'];
$kompetensi = $_GET['kompetensi'];
$query = mysqli_query($koneksi,"UPDATE kompetensi SET kompetensi='$kompetensi' WHERE id='$id'");
header('Location: ../index.php?page=data-kompetensi');
?>