<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Permohonan Kerja Praktek</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratkerjapraktektambah'); ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tujuan Surat</label>
                        <input type="hidden" name="iduser" value="<?= $profil->iduser; ?>">
                        <input type="text" class="form-control" name="tujuansurat" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Mitra</label>
                        <input type="text" class="form-control" name="namamitra" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alamat Mitra</label>
                        <textarea name="alamatmitra" rows="5" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" rows="5" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 1</label>
                        <input type="number" class="form-control" name="nim1" value="<?= $profil->nim; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 1</label>
                        <input type="text" class="form-control" name="nama1" value="<?= $profil->nama; ?>" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 2</label>
                        <input type="number" class="form-control" name="nim2">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 2</label>
                        <input type="text" class="form-control" name="nama2">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 3</label>
                        <input type="number" class="form-control" name="nim3">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 3</label>
                        <input type="text" class="form-control" name="nama3">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NIM Anggota 4</label>
                        <input type="number" class="form-control" name="nim4">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Anggota 4</label>
                        <input type="text" class="form-control" name="nama4">
                    </div>
                </div>
                <?php
                if ($this->session->userdata('level') == "admin") {
                ?>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="ttd">Yang Mengetahui dari Pihak Kampus</label>
                            <select name="ttd" id="ttd" class="form-control">
                                <option value="Restyandito, S.Kom., MSIS., Ph.D.">Restyandito, S.Kom., MSIS., Ph.D.</option>
                                <option value="Joko Purwadi, S.Kom., M.Kom.">Joko Purwadi, S.Kom., M.Kom.</option>
                                <option value="Pdt. Dr. Handi Hadiwitanto, M.Th.">Pdt. Dr. Handi Hadiwitanto, M.Th.</option>
                            </select>
                        </div>
                    </div>
                <?php } ?>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Ajukan Permohonan Surat</button>
                </div>
            </div>
        </form>
    </div>
</div>