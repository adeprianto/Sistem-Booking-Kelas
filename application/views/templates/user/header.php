<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $judul; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() . 'assets/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() . 'assets/css/sb-admin-2.min.css'; ?>" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                <div>
                    <a class="nav-link" href="<?= base_url() . 'user'; ?>">
                        <h2>
                            <i class="fas fa-school fa-sm fa-fw mr-1 text-light"></i>
                            <span class="text-light text-lg"><strong>SIPEKA</strong></span>
                        </h2>
                    </a>
                </div>

                <div class="topbar-divider d-none d-sm-block"></div>

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url() . 'user'; ?>">
                            <i class="fas fa-home fa-sm fa-fw mr-2 text-light"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url() . 'user/dataKelas'; ?>">
                            <i class="fas fa-school fa-sm fa-fw mr-2 text-light"></i>
                            Data Kelas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url() . 'user/jadwalMatkul'; ?>">
                            <i class="fas fa-calendar-alt fa-sm fa-fw mr-2 text-light"></i>
                            Jadwal Kuliah
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url() . 'user/jadwalKelas'; ?>">
                            <i class="fas fa-clipboard-check mr-2 text-light"></i>
                            Booking Kelas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">
                            <i class="fas fa-list-ul fa-sm fa-fw mr-2 text-light"></i>
                            List Booking
                        </a>
                    </li>
                </ul>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-light small"><?= $this->session->userdata('nama'); ?></span>
                            <i class="fas fa-user text-primary mr-2 ml-2 btn-circle bg-white"></i>
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Main Content -->
            <div id="content" style="min-height: 620px;">