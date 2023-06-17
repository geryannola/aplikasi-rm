<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <i class="fa fa-medkit" aria-hidden="true"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Rekam Medis</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">
            < <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href=" <?php echo base_url('dashboard') ?>">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href=" <?php echo base_url('kamar') ?> ">
                        <i class="fa fa-hospital"></i>
                        <span>Ketersediaan Ruangan</span></a>
                </li>
                <!-- Nav Item - Pages Collapse Menu -->
                <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa fa-hospital"></i>
                    <span>Ketersediaan Ruangan</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Ruang Rawat :</h6>
                        <a class="collapse-item" href=" ">Azalea</a>
                        <a class="collapse-item" href=" ">Anggrek</a>
                        <a class="collapse-item" href=" ">Cempaka</a>
                        <a class="collapse-item" href=" ">Perawatan Dewasa</a>
                        <a class="collapse-item" href=" ">ICU</a>
                        <a class="collapse-item" href=" ">IGD</a>
                        <a class="collapse-item" href=" ">Mawar</a>
                        <a class="collapse-item" href=" ">Perawatan Non Bedah</a>
                        <a class="collapse-item" href=" ">Seruni</a>
                        <a class="collapse-item" href=" ">Teratai</a>
                    </div>
                </div>
            </li> -->

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('user') ?>">
                        <i class="fa fa-user"></i>
                        <span>User Level</span></a>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fa fa-database"></i>
                        <span>Pasien</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Jenis Data :</h6>
                            <a class="collapse-item" href=" <?php echo base_url('pasien') ?>">Data Pasien</a>
                            <a class="collapse-item" href=" <?php echo base_url('registrasi') ?>">Daftar Rawat Inap</a>
                        </div>
                    </div>
                </li>



                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fa fa-database"></i>
                        <span>Master Data</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Jenis Data :</h6>
                            <a class="collapse-item" href=" <?php echo base_url('dokter') ?>">Data Dokter</a>
                            <a class="collapse-item" href=" <?php echo base_url('ruang_perawatan') ?>">Data Ruang Perawatan</a>
                            <a class="collapse-item" href=" <?php echo base_url('kamar') ?>">Data Kamar</a>
                            <a class="collapse-item" href="<?php echo base_url('lembar') ?> ">Data Lembar RM</a>
                            <a class="collapse-item" href="<?php echo base_url('indikator') ?>">Data Indikator RM</a>
                            <a class="collapse-item" href=" <?php echo base_url('jaminan') ?>">Data Jaminan</a>
                            <a class="collapse-item" href=" <?php echo base_url('status_pulang') ?> ">Data Status Pulang</a>
                            <a class="collapse-item" href="<?php echo base_url('penyakit') ?>">Data ICD 10</a>

                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-address-book"></i>
                        <span>Pasien Pulang</span></a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Analisis Dokumen</span></a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-window-restore"></i>
                        <span>Laporan Pasien</span></a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-folder-open"></i>
                        <span>Retensi Dokumen</span></a>
                </li>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html">
                        <i class="fa fa-address-card"></i>
                        <span>Register Dokumen</span></a>
                </li>

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-gradient-dark topbar mb-4 static-top shadow">

                    <button class="btn btn-dark" type="button">
                        <i class="fa fa-bars fa-sm"></i>
                    </button>

                    <!-- <div class="sidebar-brand-text mx-3">
                        <button class="btn btn-dark" type="button">
                        <i class="fa fa-home fa-sm"></i>
                    </button>
                </div>  -->

                    <!-- Sidebar Toggle (Topbar) -->

                    <!-- Topbar Search -->
                    <!-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <a href="<?php echo base_url('auth/logout') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"></i> Logout</a>
                    </ul>

                </nav>