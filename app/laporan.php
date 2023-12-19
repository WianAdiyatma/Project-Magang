       <!-- Main content -->
       <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title text-center"><b>Laporan Penilaian</b></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <tr>
                      <th>No.</th>
                      <th>Nama</th>
                      <th>Divisi</th>
                      <th>Skor</th>
                      <th>Aksi</th>
                    </tr>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM laporan");
                    while ($lpr = mysqli_fetch_array($query)) {
                      
                    ?>
                      <tr>
                      <td><?php echo $no++; ?></td>
                        <td><?php echo $lpr['karyawan']; ?></td>
                        <td><?php echo $lpr['divisi']; ?></td>
                        <td><?php echo $lpr['skor']; ?></td>
                        <td>
                          <a onclick="hapus_laporan(<?php echo $lpr['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
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
    <!-- /.modal-dialog -->
    </div>
    <script>
      function hapus_laporan(data_id) {
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
            window.location = ("delete/hapus_laporan.php?id=" + data_id);
          }
        })
      }
    </script>

    <!--<a href="index.php?page=edit-laporan&& id=<?php echo $lpr['id'];?>" class="btn btn-sm btn-success">Edit</a>-- >