<!-- ASSOSIATIVE ARRAY -->
<?php 
$karyawan = [["kode"=> "k01","nama"=> "Adimono","email"=> "adimono@gmail.com"],["kode" => "k02","nama"=> "Dika","email"=> "dika@gmail.com"]];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($karyawan as $a) : ?>
    <ul>
        <li><?= $a["kode"]; ?></li>
        <li><?= $a["nama"]; ?></li>
        <li><?= $a["email"]; ?></li>
        <?php endforeach; ?>
</ul>
</body>
</html>