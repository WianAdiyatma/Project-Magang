<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id='$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Data Karyawan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="get" action="update/update_data.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $view['nama'];?>">
                                <input type="text" class="form-control" placeholder="Nama" name="id" value="<?php echo $view['id'];?>" hidden>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Divisi</label>
                                <select class="custom-select" id="inputGroupSelect01" name="divisi">
                                    <option value="<?php echo $view['divisi'];?>" selected><?php echo $view['divisi'];?></option>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Jabatan</label>
                                <input type="text" class="form-control" rows="3" placeholder="Jabatan" name="jabatan" value="<?php echo $view['jabatan'];?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" rows="3" placeholder="Email" name="email" value="<?php echo $view['email'];?>">
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