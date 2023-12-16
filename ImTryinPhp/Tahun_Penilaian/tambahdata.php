<?php 
require 'function_tahun.php';

//cek tombol sudah di klik / blm
if ( isset($_POST["submit"]) )   {

    //cek data berhasil di tambah gaa
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil di tambahkan');
        document.location.href = 'TahunPenilaian.php';
        </script> ";
        ;
    } else {
        echo "
        <script>
        alert('data belum berhasil di tambahkan');
        document.location.href = 'TahunPenilaian.php';
        </script> ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tambah
        Tahun Penilaian</h1>

    <ul>
        <li>
    <form action="" method="post">
        <label for=""> KODE THN: </label>
        <input type="text" name="nama" required>
</li>
<br>    
<li>
    <form action="" method="post">
        <label for=""> TAHUN : </label>
        <input type="text" name="divisi" required>
</li>
<br>
<li>
        <label for="" method="post">KETERANGAN: </label>
        <input type="text" name="email" required>
</li>
<br>
<br>
<button type="submit" name="submit"> Simpan </button>
    </form>
    </ul>
    
</body>
</html>