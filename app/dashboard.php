<?php
$koneksi = mysqli_connect("localhost", "root", "", "sdm");

if (mysqli_connect_errno()) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Query to get the total number of karyawan
$resultKaryawan = mysqli_query($koneksi, "SELECT COUNT(*) as totalkry FROM karyawan");
$rowKaryawan = mysqli_fetch_assoc($resultKaryawan);
$totalDataKaryawan = $rowKaryawan['totalkry'];

// Query to get the total number of data in laporan
$resultPenilaian = mysqli_query($koneksi, "SELECT COUNT(*) as totalpen FROM laporan");
$rowPenilaian = mysqli_fetch_assoc($resultPenilaian);
$totalDataPenilaian = $rowPenilaian['totalpen'];

// Query to get the total number of data in kompetensi
$resultKompetensi = mysqli_query($koneksi, "SELECT COUNT(*) as totalkom FROM kompetensi");
$rowKompetensi = mysqli_fetch_assoc($resultKompetensi);
$totalDataKompetensi = $rowKompetensi['totalkom'];

mysqli_close($koneksi);
?>

<section class="content">
      <div class="container-fluid">

      <!-- Calendar -->
<div class="card bg-gradient-primary">
    <div class="card-header border-0">
        <h3 class="card-title">
            <i class=" far fa-light fa-clock"></i>
            Date & Clock
        </h3>
        <!-- tools card -->
        <div class="card-tools">
            <!-- button with a dropdown -->
            <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
        <!-- /. tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body pt-0">
        <!-- Real-time clock and date -->
        <div id="realTime">
            <h1 id="clock"></strong></h1>
            <div id="date"></div>
        </div>

        <!--The calendar -->
        <div id="calendar" style="width: 100%"></div>
    </div>
    <!-- /.card-body -->
</div>

<script>
    function updateClock() {
        var now = new Date();
        var hours = now.getHours();
        var minutes = now.getMinutes();
        var seconds = now.getSeconds();
        var timeString = hours + ':' + (minutes < 10 ? '0' : '') + minutes + ':' + (seconds < 10 ? '0' : '') + seconds;

        var clockElement = document.getElementById('clock');
        if (clockElement) {
            clockElement.textContent = timeString;
        }

        // Update the clock every 1000ms (1 second)
        setTimeout(updateClock, 1000);
    }

    function updateDate() {
        var now = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var dateString = now.toLocaleDateString('en-US', options);

        var dateElement = document.getElementById('date');
        if (dateElement) {
            dateElement.textContent = dateString;
        }

        // Update the date every 60000ms (1 minute)
        setTimeout(updateDate, 60000);
    }

    // Initial call to start updating the clock and date
    updateClock();
    updateDate();
</script>
        <!-- Small boxes (Stat box) -->
        <div class="row">

        <div class="col-lg-3 col-6">
   <!-- small box -->
   <div class="small-box bg-light">
      <div class="inner">
        <h4>Total Karyawan</h4>
         <h3><?php echo $totalDataKaryawan; ?></h3>
      </div>
      <div class="icon">
         <i class="ion ion-person"></i>
      </div>
      <a href="index.php?page=data-karyawan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
   </div>
</div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h4>Total Penilaian</h4>
                <h3><?php echo $totalDataPenilaian; ?><sup style="font-size: 20px"></sup></h3>
              </div>
              <div class="icon">
                <i class="ion ion-document"></i>
              </div>
              <a href="index.php?page=laporan-penilaian" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <h4>Jumlah Kompetensi</h4>
                <h3><?= $totalDataKompetensi; ?></h3>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="index.php?page=data-kompetensi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- nothing here! -->
          <!-- ./col -->
        </div>

            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>