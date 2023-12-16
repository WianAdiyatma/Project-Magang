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
    $email = htmlspecialchars( $_data["email"]);

    //query insert data in database
$query = "INSERT INTO thn_penilaian
VALUES ('','$nama','$divisi','$email')";
mysqli_query($conn,$query);

return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM thn_penilaian WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($_data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $_data["id"];
    $kode_thn = htmlspecialchars( $_data["kode_thn"]);
    $tahun = htmlspecialchars( $_data["tahun"]);
    $keterangan = htmlspecialchars( $_data["keterangan"]);

    //query insert data in database
    $query = "UPDATE thn_penilaian SET
            kode_thn = '$kode_thn',
            tahun = '$tahun',
            keterangan = '$keterangan'
            WHERE id = $id
";

mysqli_query($conn, $query); //this is necessary to connect to database 
return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM thn_penilaian 
                WHERE
                kode_thn LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%' OR
                keterangan LIKE '%$keyword%'
                ";

                return query($query);
}

//ambil data fetch karyawan dari obj result
// mysqli_fetch_row() //mengembalikan array numerik
// mysqli_fetch_assoc() //mengembalikan array associative
// mysqli_fetch_array() //mengembalikan keduanya
// mysqli_fetch_object()

?>