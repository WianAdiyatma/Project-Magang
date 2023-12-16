<?php 
require 'functions.php';

$id = $_GET["id"];

if( hapus($id) > 0) {
    echo "
        <script>
        alert('data berhasil di hapus');
        document.location.href = 'php4.php';
        </script> ";
        ;
    } else {
        echo "
        <script>
        alert('data belum berhasil di hapus');
        document.location.href = 'php4.php';
        </script> ";
}
?>