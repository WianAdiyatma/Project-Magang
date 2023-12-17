<?php
// page2.php

// Baca data dari JSON
$json_data = file_get_contents('php://input');
$data = json_decode($json_data);

// Ambil data yang dikirimkan melalui metode POST
$employee = isset($data->karyawan) ? $data->karyawan : '';
$division = isset($data->divisi) ? $data->divisi : '';
$score = isset($data->skor) ? $data->skor : '';

var_dump($employee, $division, $score);

// Informasi koneksi database (ganti dengan informasi koneksi Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdm";

// Membuat koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Periksa koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Simpan data ke dalam database (gantilah dengan operasi database sesuai kebutuhan)
// Contoh: Masukkan data ke dalam tabel 'performance' dengan kolom 'employee', 'year', dan 'score'
$sql = "INSERT INTO laporan (karyawan, divisi, skor) VALUES ('$employee', '$division', '$score')";

if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diterima dan disimpan.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
