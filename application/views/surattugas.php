<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pengajuan</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?= base_url('pengajuan/surattugastambah') ?>" class="btn btn-primary btn-icon-split btn-sm">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Buat Surat Tugas</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50">NO</th>
                        <th>NAMA / NIP</th>
                        <th>JUDUL TUGAS</th>
                        <th>NAMA PENYELENGGARA</th>
                        <th>TANGGAL SURAT</th>
                        <th>DOWNLOAD</th>
                        <th width="50">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1;
                    foreach ($pengajuan_all as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td>
                                <?php
                                $profil = $this->auth_m->getme($row['iduser']);
                                ?>
                                <?= $profil->nama . ' - ' . $profil->nim ?>
                            </td>
                            <td><?= $row['judultugas']; ?></td>
                            <td><?= $row['penyelenggarakegiatan']; ?></td>
                            <td><?= $this->pengajuan_m->format_tanggal($row['tanggal']) ?></td>
                            <?php
                            if ($row['status'] == "Di Setujui") {
                                $warna = "success";
                            } elseif ($row['status'] == "Di Tolak") {
                                $warna = "danger";
                            } else {
                                $warna = "primary";
                            }
                            if ($this->session->userdata('level') == 'admin') { ?>
                                <td>
                                    <a href="<?= site_url('pengajuan/surattugasverifikasi/' . $row['idsurattugas']); ?>" class="btn btn-sm btn-<?= $warna ?>" data-toggle="tooltip" data-placement="top" title="Verifikasi"><i class="fas fa-eye"> <?= $row['status']; ?></i></a>
                                    <?php
                                    if ($row['status'] == "Di Setujui") {
                                    ?>
                                        <a target="_blank" href="<?= site_url('pengajuan/surattugascetak/' . $row['idsurattugas']); ?>" class="btn btn-sm btn-primary"><i class="fas fa-download"> Download Surat</i></a>
                                    <?php } ?>
                                </td>
                            <?php } elseif ($this->session->userdata('level') == 'user') { ?>
                                <td><?= $row['status']; ?>
                                    <?php if ($row['status'] == "Di Setujui") {
                                        echo " (Silahkan Ambil Surat Ke Kantor Kampus)";
                                    ?>
                                        <a target="_blank" href="<?= site_url('pengajuan/surattugascetak/' . $row['idsurattugas']); ?>" class="btn btn-sm btn-primary"><i class="fas fa-download"> Download Surat</i></a>
                                    <?php
                                    } ?>
                                </td>
                            <?php } elseif ($this->session->userdata('level') == 'dosen') { ?>
                                <td><?= $row['status']; ?>
                                    <?php if ($row['status'] == "Di Setujui") {
                                        echo " (Silahkan Ambil Surat Ke Kantor Kampus)";
                                    ?>
                                        <a target="_blank" href="<?= site_url('pengajuan/surattugascetak/' . $row['idsurattugas']); ?>" class="btn btn-sm btn-primary"><i class="fas fa-download"> Download Surat</i></a>
                                    <?php
                                    } ?>
                                </td>
                            <?php } ?>
                            <td>
                                <a href="<?= site_url('pengajuan/surattugasedit/' . $row['idsurattugas']); ?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Lihat / Edit"><i class="fas fa-edit"></i></a>
                                <a href="<?= site_url('pengajuan/surattugashapus/' . $row['idsurattugas']); ?>" class="btn btn-sm btn-danger btn-circle btn-hapus" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>