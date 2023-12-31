<!DOCTYPE html>
<html lang="en">
<?php

session_start();
if(!$_SESSION['nama']){
  header('Location: ../index.php?session=expired');
}
include('header.php'); ?>
<?php include('../conf/config.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('logo.php'); ?>

      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include('content_header.php'); ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      if (isset($_GET['page'])){
        if ($_GET['page'] == 'dashboard') {
          include('dashboard.php');
        } 
        else if ($_GET['page'] == 'data-karyawan') {
          include('data_karyawan.php');
        }
        else if ($_GET['page'] == 'data-divisi') {
          include('divisi.php');
        }
        else if ($_GET['page'] == 'data-tahun-penilaian') {
          include('tahun_penilaian.php');
        }
        else if ($_GET['page'] == 'data-kinerja') {
          include('kinerja.php');
        }
        else if ($_GET['page'] == 'data-kompetensi') {
          include('kompetensi.php');
        }
        else if ($_GET['page'] == 'data-penilaian-kinerja') {
          include('penilaian_kinerja.php');
        }
         else if ($_GET['page'] == 'laporan-penilaian') {
          include('laporan.php');
        }
        else if ($_GET['page'] == 'edit-data') {
          include('edit/edit_data.php');
        }
        else if ($_GET['page'] == 'edit-divisi') {
          include('edit/edit_divisi.php');
        }
        else if ($_GET['page'] == 'edit-tahun-penilaian') {
          include('edit/edit_tahun_penilaian.php');
        }
        else if ($_GET['page'] == 'edit-kinerja') {
          include('edit/edit_kinerja.php');
        }
        else if ($_GET['page'] == 'edit-kompetensi') {
          include('edit/edit_kompetensi.php');
        }
        else if ($_GET['page'] == 'edit-laporan') {
          include('edit/edit_laporan.php');
        }
        else{
          include('not_found.php');
        }
      }
      else{
        include('dashboard.php');
      }
      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

</body>

</html>