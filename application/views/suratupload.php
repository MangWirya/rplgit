<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Surat Upload</h1>
</div>
<div class="card shadow mb-4">
    <?php if (__session('level') == 'admin') { ?>
        <div class="card-header py-3">
            <a href="<?= base_url('pengajuan/suratuploadtambah') ?>" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Buat Surat Upload</span>
            </a>
        </div>
    <?php } ?>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50">NO</th>
                        <th>JUDUL SURAT</th>
                        <th>TANGGAL SURAT</th>
                        <th>DOWNLOAD</th>
                        <?php
                        if ($this->session->userdata('level') == 'admin') { ?>
                            <th width="50">AKSI</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1;
                    foreach ($pengajuan_all as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $this->pengajuan_m->format_tanggal($row['tanggal']) ?></td>
                            <td><a class="btn btn-primary" href="<?= base_url('upload/suratupload/' . $row['file']) ?>" target="_blank">Download</a></td>
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
                                    <a href="<?= site_url('pengajuan/suratuploadedit/' . $row['idsuratupload']); ?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Lihat / Edit"><i class="fas fa-edit"></i></a>
                                    <a href="<?= site_url('pengajuan/suratuploadhapus/' . $row['idsuratupload']); ?>" class="btn btn-sm btn-danger btn-circle btn-hapus" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>