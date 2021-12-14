<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Permohonan Izin Kegiatan</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratizinkegiatanverifikasi/'.$surat->idsuratizinkegiatan); ?>" method="post">
            <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul Kegiatan</label>
                        <input type="hidden" class="form-control" name="idsuratizinkegiatan" value="<?= $surat->idsuratizinkegiatan; ?>">
                        <input type="text" class="form-control" name="judulkegiatan" value="<?= $surat->judulkegiatan; ?>" placeholder="Contoh : Lomba Desain Poster Pekan Seni Nasional " required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Penyelenggara Kegiatan</label>
                        <input type="text" class="form-control" name="penyelenggarakegiatan" value="<?= $surat->penyelenggarakegiatan; ?>" placeholder="Contoh : Universitas Indonesia" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alasan Izin</label>
                        <textarea name="alasanizin" rows="5" class="form-control" placeholder="Izin Karna Mengikuti Lomba" value="<?= $surat->alasanizin; ?>" required readonly></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Mulai Izin</label>
                        <input type="date" name="tanggalmulai" class="form-control" value="<?= $surat->tanggalmulai; ?>" required readonly></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Selesai Izin</label>
                        <input type="date" name="tanggalselesai" class="form-control" value="<?= $surat->tanggalselesai; ?>" required readonly></textarea>
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
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>