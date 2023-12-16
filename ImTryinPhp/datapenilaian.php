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
    <br><br>
    Pilih Tahun Penilaian :
    <input type="radio" name="tahun" ><label for="">2020</label>
<input type="radio" name="tahun" ><label for="">2021</label>
    <br><br>
</form>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Kriteria Kinerja</th>
            <th>Nilai</th>
            <th>Rata-rata Penilaian</th>
            <th>Bobot(%)</th>
            <th>Skor</th>
            <th>aksi</th>
        </tr>
        
        <tr>
            <?php $i = 1; ?>
        <td><?= $i; ?></td>
        <td>Mampu berkompeten dengan karyawan lain</td>
        <td><select name="" id="">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
        </select></td>
        <td rowspan="2">2.5</td>
        <td style="max-width: 80ch;" >10%</td>
        <td>20</td>
        <td><a href="edit.php?id=">edit</a> |
        <a style="color: red;" href="hapus.php?id=>" onclick="
        return confirm('apakah anda yakin ingin menghapus data? ');">hapus</a>
    </td>
    <?php $i++; ?>
    </tr>

    <tr>
            <?php $i = 2; ?>
        <td><?= $i; ?></td>
        <td>Mampu berkompeten dengan karyawan lain</td>
        <td><select name="" id="">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
        </select></td>
        <td style="max-width: 80ch;" >20%</td>
        <td>100</td>
        <td><a href="edit.php?id=">edit</a> |
        <a style="color: red;" href="hapus.php?id=>" onclick="
        return confirm('apakah anda yakin ingin menghapus data? ');">hapus</a>
    </td>
    <?php $i++; ?>
    </tr>

    <tr>
            <?php $i = 3; ?>
        <td><?= $i; ?></td>
        <td>Mampu berkompeten dengan karyawan lain</td>
        <td><select name="" id="">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
        </select></td>
        <td rowspan="2" >0</td>
        <td style="max-width: 80ch;" >30%</td>
        <td>0</td>
        <td><a href="edit.php?id=">edit</a> |
        <a style="color: red;" href="hapus.php?id=>" onclick="
        return confirm('apakah anda yakin ingin menghapus data? ');">hapus</a>
    </td>
    <?php $i++; ?>
    </tr>

    <tr>
            <?php $i = 4; ?>
        <td><?= $i; ?></td>
        <td>Mampu berkompeten dengan karyawan lain</td>
        <td><select name="" id="">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
            <option value="">4</option>
            <option value="">5</option>
        </select></td>
        
        <td style="max-width: 80ch;" >40%</td>
        <td>0</td>
        <td><a href="edit.php?id=">edit</a> |
        <a style="color: red;" href="hapus.php?id=>" onclick="
        return confirm('apakah anda yakin ingin menghapus data? ');">hapus</a>
    </td>
    <?php $i++; ?>
    </tr>

    <td colspan="4" >Total Skor :</td>
    <td>100%</td>
    <td>120</td>
    <td></td>

    </table>
</body>
</html>