<?php 
require 'function_laporan.php';
$karyawan = query("SELECT * FROM laporan");

// tombol cari ditekan
if ( isset($_POST["cari"])) {
    $karyawan = cari($_POST["keyword"]);

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
    <h1>Summary</h1>

<!-- pencarian -->
<form action="" method="post">
    <input type="text" placeholder="mau cari apa?" name="keyword" size="30">
    <button type="submit" name="cari" > Cari! </button>
    <br><br>
</form>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th>Skor</th>
            <th>Aksi</th>
        </tr>
        
        <?php $i = 1; ?>
        <?php foreach( $karyawan as $row ) : ?>
        <tr>
        <td><?= $i; ?></td>
        <td><?= $row["karyawan"]; ?></td>
        <td><?= $row["divisi"]; ?></td>
        <td><?= $row["skor"]; ?></td>
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