<?php 
require 'functions.php';

//cek tombol sudah di klik / blm
if ( isset($_POST["submit"]) )   {

    //cek data berhasil di tambah gaa
    if( tambah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil di tambahkan');
        document.location.href = 'php4.php';
        </script> ";
        ;
    } else {
        echo "
        <script>
        alert('data belum berhasil di tambahkan');
        document.location.href = 'php4.php';
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
    <h1>tambah 
        data karyawan</h1>

    <ul>
        <li>
    <form action="" method="post">
        <label for=""> Nama: </label>
        <input type="text" name="nama" required>
</li>
<br>    
<li>
        <label for="" method="post">Email: </label>
        <input type="text" name="email" required>
</li>
<br>
<li>
    <form action="" method="post">
        <label for=""> divisi : </label>
        <input type="text" name="divisi" required>
</li>
<br>
<li>
    <form action="" method="post">
        <label for=""> jabatan : </label>
        <input type="text" name="jabatan" required>
</li>
<br>
<button type="submit" name="submit"> Simpan </button>
    </form>
    </ul>
    
</body>
</html>