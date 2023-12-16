<?php 
//connect to a database
$conn = mysqli_connect("localhost", "root", "", "sdm");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($_data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars( $_data["nama"]);
    $divisi = htmlspecialchars( $_data["divisi"]);
    $jabatan = htmlspecialchars( $_data["jabatan"]);
    $email = htmlspecialchars( $_data["email"]);

    //query insert data in database
$query = "INSERT INTO karyawan
VALUES ('','$nama','$divisi','$email','$jabatan')";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM karyawan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($_data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $_data["id"];
    $nama = htmlspecialchars( $_data["nama"]);
    $kode = htmlspecialchars( $_data["kode"]);
    $divisi = htmlspecialchars( $_data["divisi"]);
    $jabatan = htmlspecialchars( $_data["jabatan"]);
    $email = htmlspecialchars( $_data["email"]);

    //query insert data in database
    $query = "UPDATE karyawan SET
            nama = '$nama',
            kode = '$kode',
            divisi = '$divisi',
            jabatan = '$jabatan',
            email = '$email'
            WHERE id = $id
";

mysqli_query($conn, $query); //this is necessary to connect to database 
return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM karyawan 
                WHERE
                nama LIKE '%$keyword%' OR
                kode LIKE '%$keyword%' OR
                divisi LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jabatan LIKE '%$keyword%'
                ";

                return query($query);
}

//ambil data fetch karyawan dari obj result
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() //mengembalikan array associative
// mysqli_fetch_array() //mengembalikan keduanya
// mysqli_fetch_object()

?>