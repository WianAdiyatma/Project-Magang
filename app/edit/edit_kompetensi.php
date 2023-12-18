<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM kompetensi WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data kompetensi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="get" action="update/update_kompetensi.php">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Kompetensi</label>
                                <input type="text" class="form-control" placeholder="Kompetensi" name="kompetensi" value="<?php echo $view['kompetensi'];?>">
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