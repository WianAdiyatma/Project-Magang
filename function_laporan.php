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

// function tambah($_data) {
//     global $conn;
//     //ambil data dari tiap elemen dalam form
//     $employee = htmlspecialchars( $_data["karyawan"]);
//     $division = htmlspecialchars( $_data["divisi"]);
//     $score = htmlspecialchars( $_data["skor"]);

//     //query insert data in database
// $query = "INSERT INTO karyawan
// VALUES ('','$employee','$division','$score')";
// mysqli_query($conn,$query);

// return mysqli_affected_rows($conn);

// }

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM laporan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($_data) {
    global $conn;
    //ambil data dari tiap elemen dalam form
    $id = $_data["id"];
    $employee = htmlspecialchars( $_data["karyawan"]);
    $division = htmlspecialchars( $_data["divisi"]);
    $score = htmlspecialchars( $_data["skor"]);

    //query insert data in database
    $query = "UPDATE laporan SET
            karyawan = '$employee',
            divisi = '$division',
            skor = '$score',
            WHERE id = $id
";

mysqli_query($conn, $query); //this is necessary to connect to database 
return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM laporan 
                WHERE
                nama LIKE '%$keyword%' OR
                divisi LIKE '%$keyword%' OR
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