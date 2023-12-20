<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
    <li class="nav-item">
      <a href="index.php?page=dashboard" class="nav-link">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
        </p>
      </a>
    </li>
    <li class="nav-item menu-open">
      <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-database"></i>
        <p>
          Manajemen Data
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=data-karyawan" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Karyawan</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=data-divisi" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Divisi</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=data-tahun-penilaian" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Tahun Penilaian</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=data-kinerja" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Data Kinerja</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="index.php?page=data-kompetensi" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Kompetensi</p>
          </a>
        </li>
      </ul>
      <li class="nav-item menu-open">
      <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
          Manajemen Kinerja
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=data-penilaian-kinerja" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Penilaian Kinerja</p>
          </a>
        </li>
      </ul>
      <li class="nav-item menu-open">
      <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-file"></i>
        <p>
          Laporan
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="index.php?page=laporan-penilaian" class="nav-link ">
            <i class="far fa-circle nav-icon"></i>
            <p>Laporan Penilaian</p>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a href="logout.php" class="nav-link text-red">
        <i class="nav-icon fas fa-arrow-circle-left"></i>
        <p>
          Logout
        </p>
      </a>
    </li>
  </ul>
</nav>