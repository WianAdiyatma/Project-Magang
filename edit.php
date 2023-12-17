<?php 
require 'functions.php';

// ambil data dari id
$id = $_GET["id"];
// query data karyawan berdasar id
$laporan = query("SELECT * FROM laporan WHERE id = $id") [0];

//cek tombol sudah di klik / blm
if ( isset($_POST["submit"]) )   {

    //cek data berhasil di tambah gaa
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil di ubah');
        document.location.href = 'laporan.php';
        </script> ";
        ;
    } else {
        echo "
        <script>
        alert('data belum berhasil di ubah');
        document.location.href = 'laporan.php';
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
        <input type="hidden" name="id" value=" <?= $laporan["id"]; ?>" >
    <ul>
        <li>
        <label for=""> Nama: </label>
        <input type="text" name="karyawan" required
        value= "<?= $laporan["karyawan"]; ?>" >
</li>
<br>    
<li>
        <label for="" method="post">Divisi: </label>
        <input type="text" name="divisi" required
        value= "<?= $laporan["divisi"]; ?>" >
</li>
<br>
<li>
    <form action="" method="post">
        <label for=""> Skor : </label>
        <input type="text" name="skor" required
        value=" <?= $laporan["skor"]; ?>">
</li>
<br>
<li>
    <form action="" method="post">
        <label for=""> Jabatan : </label>
        <input type="text" name="jabatan" required
        value=" <?= $laporan["jabatan"]; ?>">
</li>
<br>
<button type="submit" name="submit"> Simpan </button>
    </form>
    </ul>
    
</body>
</html>