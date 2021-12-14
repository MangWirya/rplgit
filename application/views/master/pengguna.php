<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Pengguna</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <?php if (__session('level') == 'admin') { ?>
            <a href="<?= base_url('master/pengguna/penggunatambah') ?>" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah</span>
            </a>
        <?php } ?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="50">NO</th>
                        <th>NIK</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>LEVEL</th>
                        <?php if (__session('level') == 'admin') { ?>
                            <th width="50">AKSI</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php $n = 1;
                    foreach ($pengguna_all as $row) : ?>
                        <tr>
                            <td><?= $n++; ?></td>
                            <td><?= $row['nik']; ?></td>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['alamat']; ?></td>
                            <td><?= $row['level']; ?></td>
                            <?php if (__session('level') == 'admin') { ?>
                                <td>
                                    <a href="<?= site_url('master/pengguna/penggunaedit/' . $row['iduser']); ?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Lihat / Edit"><i class="fas fa-edit"></i></a>
                                    <a href="<?= site_url('master/pengguna/penggunadelete/' . $row['iduser']); ?>" class="btn btn-sm btn-danger btn-circle btn-hapus" data-toggle="tooltip" data-placement="top" title="Hapus Data"><i class="fas fa-trash"></i></a>
                                </td>
                            <?php } ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>