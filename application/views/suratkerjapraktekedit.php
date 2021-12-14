<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Surat Permohonan Kerja Praktek</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratkerjapraktekedit/'.$surat->idsuratkerjapraktek); ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tujuan Surat</label>
                        <input type="hidden" class="form-control" name="idsuratkerjapraktek" value="<?= $surat->idsuratkerjapraktek; ?>">
                        <input type="text" class="form-control" name="tujuansurat" value="<?= $surat->tujuansurat; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Mitra</label>
                        <input type="text" class="form-control" name="namamitra" value="<?= $surat->namamitra; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alamat Mitra</label>
                        <textarea name="alamatmitra" rows="5" class="form-control" value="<?= $surat->alamatmitra; ?>" required><?= $surat->alamatmitra; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" rows="5" class="form-control" value="<?= $surat->keterangan; ?>" required><?= $surat->keterangan; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= $surat->tanggal; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 1</label>
                        <input type="number" class="form-control" name="nim1" value="<?= $surat->nim1; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 1</label>
                        <input type="text" class="form-control" name="nama1" value="<?= $surat->nama1; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 2</label>
                        <input type="number" class="form-control" name="nim2" value="<?= $surat->nim2; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 2</label>
                        <input type="text" class="form-control" name="nama2" value="<?= $surat->nama2; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 3</label>
                        <input type="number" class="form-control" name="nim3" value="<?= $surat->nim3; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 3</label>
                        <input type="text" class="form-control" name="nama3" value="<?= $surat->nama3; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 4</label>
                        <input type="number" class="form-control" name="nim4" value="<?= $surat->nim4; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 4</label>
                        <input type="text" class="form-control" name="nama4" value="<?= $surat->nama4; ?>">
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>