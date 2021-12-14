<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Surat Pengumuman</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratpengumumanedit/'.$surat->idsuratpengumuman); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul Pengumuman</label>
                        <input type="hidden" class="form-control" name="idsuratpengumuman" value="<?= $surat->idsuratpengumuman; ?>">
                        <input type="text" class="form-control" name="judulpengumuman" value="<?= $surat->judulpengumuman; ?>" placeholder="Contoh : Pengumuman Libur Peringatan Hari Kemerdekaan" required>
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
                        <label>Isi Pengumuman</label>
                        <textarea name="isipengumuman" rows="10" class="form-control" value="<?= $surat->isipengumuman; ?>" required><?= $surat->isipengumuman; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ttd">Yang Mengetahui dari Pihak Kampus</label>
                        <select name="ttd" id="ttd" class="form-control">
                            <option value="<?= $surat->ttd; ?>"><?= $surat->ttd; ?></option>
                            <option value="Restyandito, S.Kom., MSIS., Ph.D.">Restyandito, S.Kom., MSIS., Ph.D.</option>
                            <option value="Joko Purwadi, S.Kom., M.Kom.">Joko Purwadi, S.Kom., M.Kom.</option>
                            <option value="Pdt. Dr. Handi Hadiwitanto, M.Th.">Pdt. Dr. Handi Hadiwitanto, M.Th.</option>
                        </select>
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>