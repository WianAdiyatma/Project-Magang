<?php 
require 'function_tahun.php';
$thn_penilaian = query("SELECT * FROM thn_penilaian");

// tombol cari ditekan
if ( isset($_POST["cari"])) {
    $thn_penilaian = cari($_POST["keyword"]);

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
    <h1>Tahun Penilaian</h1>
<a href="tambahdata.php">
    <button type="submit">Tambahkan data mahasiswa</button>
</a><br><br>

<!-- pencarian -->
<form action="" method="post">
    <input type="text" placeholder="mau cari apa?" name="keyword" size="30">
    <button type="submit" name="cari" > Cari! </button>
    Pilih Tahun Penilaian :
    <input type="radio" name="tahun" ><label for="">2020</label>
<input type="radio" name="tahun" ><label for="">2021</label>
    <select name="" id="">
        <option value="">2020</option>
        <option value="">2021</option>
        <option value="">2023</option>
    </select>
    <br><br>
</form>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Kode Tahun Penilaian</th>
            <th>Tahun Penilaian</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach( $thn_penilaian as $row ) : ?>
        <tr>
        <td><?= $i; ?></td>
        <td><?= $row["kode_thn"]; ?></td>
        <td><?= $row["tahun"]; ?></td>
        <td style="max-width: 80ch;" ><?= $row["keterangan"]; ?></td>
        <td><a href="edit.php?id=<?= $row["id"];?>">edit</a> |
        <a style="color: red;" href="hapus.php?id=<?= $row["id"];?>" onclick="
        return confirm('apakah anda yakin ingin menghapus data? ');">hapus</a>
    </td>
    </tr>
    <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>