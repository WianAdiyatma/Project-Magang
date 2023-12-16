<?php 
require 'functions.php';

// ambil data dari id
$id = $_GET["id"];
// query data karyawan berdasar id
$karyawan = query("SELECT * FROM karyawan WHERE id = $id") [0];

//cek tombol sudah di klik / blm
if ( isset($_POST["submit"]) )   {

    //cek data berhasil di tambah gaa
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil di ubah');
        document.location.href = 'php4.php';
        </script> ";
        ;
    } else {
        echo "
        <script>
        alert('data belum berhasil di ubah');
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
    <h1>ubah tahun penilaian</h1>

    
    <form action="" method="post">
        <input type="hidden" name="id" value=" <?= $karyawan["id"]; ?>" >
    <ul>
        <li>
        <label for=""> Nama: </label>
        <input type="text" name="nama" required
        value= "<?= $karyawan["nama"]; ?>" >
</li>
<br>    
<li>
        <label for="" method="post">Email: </label>
        <input type="text" name="email" required
        value= "<?= $karyawan["email"]; ?>" >
</li>
<br>
<li>
    <form action="" method="post">
        <label for=""> divisi : </label>
        <input type="text" name="divisi" required
        value=" <?= $karyawan["divisi"]; ?>">
</li>
<br>
<li>
    <form action="" method="post">
        <label for=""> Jabatan : </label>
        <input type="text" name="jabatan" required
        value=" <?= $karyawan["jabatan"]; ?>">
</li>
<br>
<button type="submit" name="submit"> Simpan </button>
    </form>
    </ul>
    
</body>
</html>