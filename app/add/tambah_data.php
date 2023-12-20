<?php
include('../../conf/config.php');
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $nama = $_POST['nama'];
    $divisi = $_POST['divisi'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    // SQL query to check for existing data
    $checkQuery = "SELECT * FROM karyawan WHERE nama = '$nama' OR email = '$email'";
    $result = $koneksi->query($checkQuery);

    if ($result->num_rows == 0) {
        // No duplicate found, proceed with insertion
        $insertQuery = "INSERT INTO karyawan (nama, divisi, jabatan, email) 
                        VALUES ('$nama', '$divisi', '$jabatan', '$email')";

        if ($koneksi->query($insertQuery) === TRUE) {
            // Data inserted successfully
            $response = "Data berhasil disimpan.";
        } else {
            // Error in insertion
            $response = "Error: " . $insertQuery . "<br>" . $koneksi->error;
        }
    } else {
        // Duplicate found
        $response = "Data dengan nama dan email yang sama sudah ada.";
         '<script>alert("' . $response . '");</script>';
    }

    // Close the database connection
    $koneksi->close();

    // Send the response to the client
    header('Content-Type: application/json');
echo json_encode(['message' => $response]);
}

?>