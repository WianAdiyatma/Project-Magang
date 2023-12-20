<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM divisi WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Divisi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="get" action="update/update_divisi.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Divisi</label>
                                <input type="text" class="form-control" placeholder="Divisi" name="divisi" value="<?php echo $view['divisi'];?>">
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