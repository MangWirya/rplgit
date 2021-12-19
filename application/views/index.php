<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SISTEM INFORMASI SURAT MENYURAT FTI UKDW</title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/') ?>logo.png">
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/vendor/select2/css/select2.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
                <?php if (__session('level') == 'admin') { ?>
                    <div class="sidebar-brand-text mx-3">Admin</div>
                <?php } elseif (__session('level') == 'kepala') { ?>
                    <div class="sidebar-brand-text mx-3">Kepala Lurah</div>
                <?php } elseif (__session('level') == 'user') { ?>
                    <div class="sidebar-brand-text mx-3">Mahasiswa</div>
                <?php } ?>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php if (__session('level') == 'admin') { ?>
                <!-- Heading -->
                <div class="sidebar-heading">
                    Menu Utama
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('master/pengguna/pengguna'); ?>">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Manajamen User</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-plus"></i>
                        <span>Buat Surat</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Buat Surat</h6>
                            <a class="collapse-item" href="<?= base_url('pengajuan/'); ?>">Surat Kerja Praktek</a>
                            <a class="collapse-item" href="<?= base_url('pengajuan/suratberitaacara'); ?>">Surat Berita Acara</a>
                            <a class="collapse-item" href="<?= base_url('pengajuan/suratpengumuman'); ?>">Surat Pengumuman</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Permohonan</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Permohonan Surat</h6>
                            <a class="collapse-item" href="<?= base_url('pengajuan'); ?>">Surat Kerja Praktek</a>
                            <a class="collapse-item" href="<?= base_url('pengajuan/suratizinkegiatan'); ?>">Surat Izin Kegiatan</a>
                            <a class="collapse-item" href="<?= base_url('pengajuan/surattugas'); ?>">Surat Tugas</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajuan/suratupload'); ?>">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Surat Upload</span></a>
                </li>
            <?php } elseif (__session('level') == 'user') { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Permohonan Saya</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Permohonan Saya</h6>
                            <a class="collapse-item" href="<?= base_url('pengajuan/'); ?>">Surat Kerja Praktek</a>
                            <a class="collapse-item" href="<?= base_url('pengajuan/suratizinkegiatan'); ?>">Surat Izin Kegiatan</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-plus"></i>
                        <span>Buat Permohonan</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Buat Permohonan</h6>
                            <a class="collapse-item" href="<?= base_url('pengajuan/suratkerjapraktektambah'); ?>">Surat Kerja Praktek</a>
                            <a class="collapse-item" href="<?= base_url('pengajuan/suratizinkegiatantambah'); ?>">Surat Izin Kegiatan</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajuan/suratpengumuman'); ?>">
                        <i class="fas fa-fw fa-bell"></i>
                        <span>Surat Pengumuman</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajuan/suratupload'); ?>">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Surat Upload</span></a>
                </li>
            <?php } elseif (__session('level') == 'dosen') { ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-list"></i>
                        <span>Permohonan Saya</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Permohonan Saya</h6>
                            <a class="collapse-item" href="<?= base_url('pengajuan/surattugas'); ?>">Surat Tugas</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-plus"></i>
                        <span>Buat Permohonan</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Buat Permohonan</h6>
                            <a class="collapse-item" href="<?= base_url('pengajuan/surattugastambah'); ?>">Surat Tugas</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajuan/suratpengumuman'); ?>">
                        <i class="fas fa-fw fa-bell"></i>
                        <span>Surat Pengumuman</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('pengajuan/suratupload'); ?>">
                        <i class="fas fa-fw fa-book"></i>
                        <span>Surat Upload</span></a>
                </li>
            <?php } ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('dashboard/profil_saya'); ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil Saya</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-lg-inline text-gray-600 small"><?= strtoupper(__session('email')); ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('dashboard/profil_saya'); ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil Saya
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="flash-data-berhasil" data-berhasil="<?= $this->session->flashdata('success'); ?>"></div>
                    <div class="flash-data-gagal" data-gagal="<?= $this->session->flashdata('error'); ?>"></div>
                    <?php $this->load->view($content); ?>
                </div>
                <!-- /.container-fluid -->

            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda yakin ingin keluar dari aplikasi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal"><i class="fas fa-times"></i> Tidak</button>
                    <a class="btn btn-danger btn-sm" href="<?= base_url('auth/logout'); ?>"><i class="fas fa-sign-out-alt"></i> Iya,
                        Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/select2/js/select2.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url(); ?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?= base_url(); ?>assets/js/demo/sweet-alert.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

</body>

</html>