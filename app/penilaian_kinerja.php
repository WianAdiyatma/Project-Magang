<?php
// Include the file with the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sdm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get data for the karyawan dropdown
$sqlKaryawan = "SELECT id, nama FROM karyawan";
$resultKaryawan = $conn->query($sqlKaryawan);

// SQL query to get data for the divisi dropdown
$sqlDivisi = "SELECT id, divisi FROM divisi";
$resultDivisi = $conn->query($sqlDivisi);

// Close the database connection
$conn->close();
?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tebel Penilaian</h3>
                    </div>

                    <div class="col-md-6 mb-2">
                        <?php
                        if ($resultDivisi->num_rows > 0) {
                            echo '<label for="divisiDropdown">Pilih Divisi :</label>';
                            echo '<select id="divisiDropdown" class="form-control">';

                            while ($rowDivisi = $resultDivisi->fetch_assoc()) {
                                echo '<option value="' . $rowDivisi["id"] . '">' . $rowDivisi["divisi"] . '</option>';
                            }

                            echo '</select>';
                        } else {
                            echo "No employees found.";
                        }

                        ?>
                    </div>

                    <div class="col-md-6 mb-2">
                        <?php
                        if ($resultKaryawan->num_rows > 0) {
                            echo '<label for="karyawanDropdown">Pilih karyawan :</label>';
                            echo '<select id="karyawanDropdown" class="form-control">';

                            while ($rowKaryawan = $resultKaryawan->fetch_assoc()) {
                                echo '<option value="' . $rowKaryawan["id"] . '">' . $rowKaryawan["nama"] . '</option>';
                            }

                            echo '</select>';
                        } else {
                            echo "No employees found.";
                        }

                        ?>
                    </div>


                    <!-- /.card-header -->
                    <div class="card-body">
                        <br></br>
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <tr>
                                    <th>No</th>
                                    <th>Kriteria Kinerja</th>
                                    <th>Rating</th>
                                    <th>Jumlah</th>
                                    <th>Bobot</th>
                                    <th>Skor</th>
                                    <th>Keterangan</th>
                                </tr>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="2">1</td>
                                    <td style="width: 10em;">Berkomitmen</td>
                                    <td>
                                        <select id="dropdown1_1" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </td>
                                    <td rowspan="2" id="result1"></td>
                                    <td rowspan="2" id="bobot1">10</td>
                                    <td rowspan="2" id="result3_1"></td>
                                    <td rowspan="2" id="keterangan1"></td>
                                </tr>
                                <tr>
                                    <td>Mencapai target</td>
                                    <td>
                                        <select id="dropdown1_2" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td rowspan="2">2</td>
                                    <td style="width: 10em;">Mampu menerima tekanan under pressure</td>
                                    <td>
                                        <select id="dropdown2_1" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </td>
                                    <td rowspan="2" id="result2"></td>
                                    <td rowspan="2" id="bobot2">10</td>
                                    <td rowspan="2" id="result3_2"></td>
                                    <td rowspan="2" id="keterangan2"></td>
                                </tr>
                                <tr>
                                    <td>Bekerja dengan baik</td>
                                    <td>
                                        <select id="dropdown2_2" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Total Skor</th>
                                    <td colspan="2"></td>
                                    <td id="jumlahTotal"></td>
                                    <td id="bobotTotal"></td>
                                    <td id="skorTotal"></td>
                                    <td id="totalKeterangan"></td>
                                </tr>
                            </tbody>
                        </table>
                        <br><br>
                        <button id="submitButton" class="btn btn-primary">Submit</button>
                    </div>

                    <!-- Bootstrap JS and Popper.js (optional) -->
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script>
                        function calculateScore() {
                            const selectedValue1_1 = parseInt(document.getElementById('dropdown1_1').value);
                            const selectedValue1_2 = parseInt(document.getElementById('dropdown1_2').value);
                            const selectedValue2_1 = parseInt(document.getElementById('dropdown2_1').value);
                            const selectedValue2_2 = parseInt(document.getElementById('dropdown2_2').value);

                            const bobot1 = 10;
                            const bobot2 = 10;

                            const jumlah1 = selectedValue1_1 + selectedValue1_2;
                            const jumlah2 = selectedValue2_1 + selectedValue2_2;

                            const skor1 = jumlah1 * bobot1;
                            const skor2 = jumlah2 * bobot2;

                            // Logika if-else untuk menentukan keterangan
                            let keterangan1 = '';

                            if (skor1 > 80) {
                                keterangan1 = 'Sangat Baik';
                            } else if (skor1 > 60) {
                                keterangan1 = 'Baik';
                            } else if (skor1 > 40) {
                                keterangan1 = 'Cukup';
                            } else {
                                keterangan1 = 'Kurang';
                            }

                            let keterangan2 = '';

                            if (skor2 > 80) {
                                keterangan2 = 'Sangat Baik';
                            } else if (skor2 > 60) {
                                keterangan2 = 'Baik';
                            } else if (skor2 > 40) {
                                keterangan2 = 'Cukup';
                            } else {
                                keterangan2 = 'Kurang';
                            }

                            const totalScore = skor1 + skor2;
                            let totalKeterangan = '';

                            if (totalScore > 80) {
                                totalKeterangan = 'Sangat Baik';
                            } else if (totalScore > 60) {
                                totalKeterangan = 'Baik';
                            } else if (totalScore > 40) {
                                totalKeterangan = 'Cukup';
                            } else {
                                totalKeterangan = 'Kurang';
                            }

                            // Set values to the HTML elements
                            document.getElementById('result1').textContent = jumlah1;
                            document.getElementById('bobot1').textContent = bobot1;
                            document.getElementById('result3_1').textContent = skor1;
                            document.getElementById('keterangan1').textContent = keterangan1;

                            document.getElementById('result2').textContent = jumlah2;
                            document.getElementById('bobot2').textContent = bobot2;
                            document.getElementById('result3_2').textContent = skor2;
                            document.getElementById('keterangan2').textContent = keterangan2;

                            document.getElementById('totalKeterangan').textContent = totalKeterangan;
                            document.getElementById('skorTotal').textContent = totalScore;
                            document.getElementById('bobotTotal').textContent = bobot1 + bobot2;
                            document.getElementById('jumlahTotal').textContent = jumlah1 + jumlah2;
                        }

                        // Add event listeners to calculate the score when dropdowns change
                        document.getElementById('dropdown1_1').addEventListener('change', calculateScore);
                        document.getElementById('dropdown1_2').addEventListener('change', calculateScore);
                        document.getElementById('dropdown2_1').addEventListener('change', calculateScore);
                        document.getElementById('dropdown2_2').addEventListener('change', calculateScore);

                        // Initial calculation of total score
                        calculateScore();

                        // Add event listener to the Submit button
                        document.getElementById('submitButton').addEventListener('click', function() {
                            const karyawan = document.getElementById('karyawanDropdown').value;
                            const divisi = document.getElementById('divisiDropdown').value;
                            const skorTotal = document.getElementById('skorTotal').textContent;

                            console.log("Data yang akan dikirim:", {
                                karyawan,
                                divisi,
                                skorTotal
                            });

                            // Kirim data ke skrip PHP untuk disimpan di database
                            fetch('page2.php', {
                                    method: 'POST',
                                    body: JSON.stringify({
                                        karyawan,
                                        divisi,
                                        skor: skorTotal
                                    }),
                                    headers: {
                                        'Content-Type': 'application/json'
                                    }
                                })
                                .then(response => response.text())
                                .then(data => {
                                    // Tampilkan respons dari server pada konsol
                                    console.log("Respons dari server:", data);

                                    // Tampilkan popup konfirmasi
                                    alert("Data berhasil diupload ke database!");
                                })
                                .catch(error => {
                                    // Tampilkan pesan kesalahan pada konsol jika ada
                                    console.error("Kesalahan:", error);
                                });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</section>