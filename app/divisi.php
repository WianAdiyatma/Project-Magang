    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center"><b>Data Divisi</b></h3>
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
                      <th>Divisi</th>
                      <th>Aksi</th>
                    </tr>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM divisi");
                    while ($dvs = mysqli_fetch_array($query)) {
                      
                    ?>
                      <tr>
                      <td><?php echo $no++; ?></td>
                        <td><?php echo $dvs['divisi']; ?></td>
                        <td>
                          <a onclick="hapus_divisi(<?php echo $dvs['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                          <a href="index.php?page=edit-divisi&& id=<?php echo $dvs['id'];?>" class="btn btn-sm btn-success">Edit</a>
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
            <h4 class="modal-title">Tambah Divisi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="get" action="add/tambah_divisi.php">
            <div class="modal-body">
              <div class="form-row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Divisi" name="divisi" required>
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
    <script>
      function hapus_divisi(data_id) {
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
            window.location = ("delete/hapus_divisi.php?id=" + data_id);
          }
        })
      }
    </script>