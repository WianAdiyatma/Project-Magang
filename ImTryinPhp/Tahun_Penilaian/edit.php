<?php 
require 'function_tahun.php';

// ambil data dari id
$id = $_GET["id"];
// query data$thn_penilaian berdasar id
$thn_penilaian = query("SELECT * FROM thn_penilaian WHERE id = $id") [0];

//cek tombol sudah di klik / blm
if ( isset($_POST["submit"]) )   {

    //cek data berhasil di tambah gaa
    if( ubah($_POST) > 0 ) {
        echo "
        <script>
        alert('data berhasil di ubah');
        document.location.href = 'tahunpenilaian.php';
        </script> ";
        ;
    } else {
        echo "
        <script>
        alert('data belum berhasil di ubah');
        document.location.href = 'tahunpenilaian.php';
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
    <h1>ubah data$thn_penilaian</h1>

    
    <form action="" method="post">
        <input type="hidden" name="id" value=" <?= $thn_penilaian["id"]; ?>" >
    <ul>
        <li>
        <label for=""> Kode Tahun: </label>
        <input type="text" name="kode_thn" required
        value= "<?= $thn_penilaian["kode_thn"]; ?>" >
</li>
<br>    
<li>
    <form action="" method="post">
        <label for=""> Tahun : </label>
        <input type="text" name="tahun" required
        value=" <?= $thn_penilaian["tahun"]; ?>">
</li>
<br>
<li>
        <label for="" method="post">Keterangan : </label>
        <input type="text" name="keterangan" required
        value= "<?= $thn_penilaian["keterangan"]; ?>" >
</li>
<br>
<br>
<button type="submit" name="submit"> Simpan </button>
    </form>
    </ul>
    
</body>
</html>