<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Surat Permohonan Kerja Praktek</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratkerjapraktekverifikasi/' . $surat->idsuratkerjapraktek); ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tujuan Surat</label>
                        <input type="hidden" class="form-control" name="idsuratkerjapraktek" value="<?= $surat->idsuratkerjapraktek; ?>">
                        <input type="text" class="form-control" name="tujuansurat" value="<?= $surat->tujuansurat; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Mitra</label>
                        <input type="text" class="form-control" name="namamitra" value="<?= $surat->namamitra; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alamat Mitra</label>
                        <textarea name="alamatmitra" rows="5" class="form-control" value="<?= $surat->alamatmitra; ?>" required readonly><?= $surat->alamatmitra; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" rows="5" class="form-control" value="<?= $surat->keterangan; ?>" required readonly><?= $surat->keterangan; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 1</label>
                        <input type="number" class="form-control" name="nim1" value="<?= $surat->nim1; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 1</label>
                        <input type="text" class="form-control" name="nama1" value="<?= $surat->nama1; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 2</label>
                        <input type="number" class="form-control" name="nim2" value="<?= $surat->nim2; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 2</label>
                        <input type="text" class="form-control" name="nama2" value="<?= $surat->nama2; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 3</label>
                        <input type="number" class="form-control" name="nim3" value="<?= $surat->nim3; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 3</label>
                        <input type="text" class="form-control" name="nama3" value="<?= $surat->nama3; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 4</label>
                        <input type="number" class="form-control" name="nim4" value="<?= $surat->nim4; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 4</label>
                        <input type="text" class="form-control" name="nama4" value="<?= $surat->nama4; ?>" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="status">Verifikasi</label>
                        <select name="status" id="status" class="form-control">
                            <option value="Di Setujui" <?= $surat->status == 'Di Setujui' ? 'selected' : ''; ?>>Di Setujui</option>
                            <option value="Di Tolak" <?= $surat->status == 'Di Tolak' ? 'selected' : ''; ?>>Di Tolak</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ttd">Tanda Tangan</label>
                        <select name="ttd" id="ttd" class="form-control">
                            <option value="Restyandito, S.Kom., MSIS., Ph.D.">Restyandito, S.Kom., MSIS., Ph.D.</option>
                            <option value="Joko Purwadi, S.Kom., M.Kom.">Joko Purwadi, S.Kom., M.Kom.</option>
                            <option value="Pdt. Dr. Handi Hadiwitanto, M.Th.">Pdt. Dr. Handi Hadiwitanto, M.Th.</option>
                        </select>
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Verifikasi</button>
                </div>
            </div>
        </form>
    </div>
</div>