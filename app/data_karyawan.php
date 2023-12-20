<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div id="toast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-body">
                <span id=toastMes></span>
                <!-- Toast content will appear here -->
              </div>
            </div>
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center"><b>Data Karyawan</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Divisi</th>
                      <th>Jabatan</th>
                      <th>Email</th>
                      <th>Aksi</th>
                    </tr>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM karyawan");
                    while ($kry = mysqli_fetch_array($query)) {

                    ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $kry['nama']; ?></td>
                        <td><?php echo $kry['divisi']; ?></td>
                        <td><?php echo $kry['jabatan']; ?></td>
                        <td><?php echo $kry['email']; ?></td>
                        <td>
                          <a onclick="hapus_data(<?php echo $kry['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                          <a href="index.php?page=edit-data&& id=<?php echo $kry['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Karyawan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="add/tambah_data.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <div class="col">
                  <select class="custom-select" id="inputGroupSelect01" name="divisi">
                    <option value="Budidaya">Budidaya</option>
                    <option value="Pembenihan">Pembenihan</option>
                    <option value="Litbang">Litbang</option>
                    <option value="Pengolahan">Pengolahan</option>
                    <option value="Renbang & QA">Renbang & QA</option>
                    <option value="Teknik">Teknik</option>
                    <option value="Pemasaran Export">Pemasaran Export</option>
                    <option value="Pemasaran Domestik">Pemasaran Domestik</option>
                    <option value="Umum">Umum</option>
                    <option value="Keuangan">Keuangan</option>
                    <option value="SDM">SDM</option>
                    <option value="SPI">SPI</option>
                    <option value="Sekper">Sekper</option>
                  </select>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Jabatan" name="jabatan" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" placeholder="Email" name="email" required>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
      </div>
      </form>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- toast notifikasi -->
    <script>
      $(function(){
        toast.success("Data berhasil disimpan", {timeOut:2000})});
        fetch('add/tambah_data.php') // Adjust this URL accordingly
        .then(response => response.json())
        .then(data => {
          document.getElementById('toast').innerText = data.message;
          $('#toast').toast('show'); // Assuming you're using Bootstrap for toasts
        })
        .catch(error => console.error('Error:', error));
    </script>
    <script>
      function hapus_data(data_id) {
        //alert('ok');
        //window.location=("delete/hapus_data.php?id="+data_id);
        Swal.fire({
          title: "Apakah Anda yakin menghapus data?",
          //showDenyButton: false,
          showCancelButton: true,
          confirmButtonText: "Hapus Data",
          confirmButtonColor: '#CD5C5C',
          //denyButtonText: `Don't save`
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
            window.location = ("delete/hapus_data.php?id=" + data_id);
          }
        })
      }
    </script>