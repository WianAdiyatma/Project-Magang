<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM kinerja WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Kinerja</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="get" action="update/update_kinerja.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kinerja</label>
                                <input type="text" class="form-control" placeholder="Kinerja" name="kinerja" value="<?php echo $view['kinerja'];?>">
                                <input type="text" class="form-control" placeholder="Nama" name="id" value="<?php echo $view['id'];?>" hidden>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</section>