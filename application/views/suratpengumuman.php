<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Surat Pengumuman</h1>
</div>
<div class="card shadow mb-4">
    <?php if (__session('level') == 'admin') { ?>
        <div class="card-header py-3">
            <a href="<?= base_url('pengajuan/suratpengumumantambah') ?>" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Buat Surat Pengumuman</span>
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
                        <th>ISI PENGUMUMAN</th>
                        <th>TANGGAL SURAT</th>
                        <th>DOWNLOAD</th>
                        <?php if (__session('level') == 'admin') { ?>
                            <th width="50">AKSI</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1;
                    foreach ($pengajuan_all as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $row['judulpengumuman']; ?></td>
                            <td><?= $row['isipengumuman']; ?></td>
                            <td><?= $this->pengajuan_m->format_tanggal($row['tanggal']) ?></td>
                            <td><a target="_blank" href="<?= site_url('pengajuan/suratpengumumancetak/' . $row['idsuratpengumuman']); ?>" class="btn btn-sm btn-primary"><i class="fas fa-download"> Download Surat</i></a></td>
                            <?php if (__session('level') == 'admin') { ?>
                                <td>
                                    <a href="<?= site_url('pengajuan/suratpengumumanedit/' . $row['idsuratpengumuman']); ?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Lihat / Edit"><i class="fas fa-edit"></i></a>
                                    <a href="<?= site_url('pengajuan/suratpengumumanhapus/' . $row['idsuratpengumuman']); ?>" class="btn btn-sm btn-danger btn-circle btn-hapus" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>