<script>
    // File type validation
</script>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
<?php if (__session('level') == 'admin') { ?>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Mahasiswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'user')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Dosen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'dosen')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'admin')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array()); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan Belum Di Verifikasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array('status' => 'Menunggu Persetujuan')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan Di Setujui</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array('status' => 'Di Setujui')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan Di Tolak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array('status' => 'Di Tolak')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <h3 class="text-warning text-center">
                        ADMIN</h3>
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-8">
                            <h4>
                                Hello Admin</h4>
                            <p>Selamat Datang Di Website<br>SISTEM INFORMASI SURAT MENYURAT FTI UKDW</p>
                        </div>
                        <div class="col-md-4 col-auto">
                            <center>
                                <i class="fas fa-map-marker-alt fa-6x text-gray-300"></i>
                                <p>FTI UKDW</p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } elseif (__session('level') == 'dosen') { ?>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Mahasiswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'user')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Dosen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'dosen')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'admin')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <h3 class="text-warning text-center">
                        DOSEN</h3>
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-8">
                            <h4>
                                Hello <?php echo __session('nama') ?></h4>
                            <p>Selamat Datang Di Website <br>SISTEM INFORMASI SURAT MENYURAT FTI UKDW</p>
                        </div>
                        <div class="col-md-4 col-auto">
                            <center>
                                <i class="fas fa-map-marker-alt fa-6x text-gray-300"></i>
                                <p>FTI UKDW</p>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } elseif (__session('level') == 'user') { ?>
    <div class="row">
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Mahasiswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'user')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Dosen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'dosen')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Admin</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengguna_m->jumlahpenduduk(array('level' => 'admin')); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array('iduser' => $this->session->userdata('iduser'))); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan Belum Di Verifikasi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array('status' => 'Menunggu Persetujuan','iduser' => $this->session->userdata('iduser'))); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-arrow-right fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan Di Setujui</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array('status' => 'Di Setujui','iduser' => $this->session->userdata('iduser'))); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Permohonan Di Tolak</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $this->pengajuan_m->jumlahpermohonan(array('status' => 'Di Tolak','iduser' => $this->session->userdata('iduser'))); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-times fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <h3 class="text-warning text-center">
                        MAHASISWA</h3>
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-8">
                            <h4>
                                Hello <?php echo __session('nama') ?></h4>
                            <p>Selamat Datang Di Website<br>SISTEM INFORMASI SURAT MENYURAT FTI UKDW</p>
                        </div>
                        <div class="col-md-4 col-auto">
                            <center>
                                <i class="fas fa-map-marker-alt fa-6x text-gray-300"></i>
                                <p>FTI UKDW</p>
                            </center>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>