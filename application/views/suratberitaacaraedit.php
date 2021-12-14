<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Berita Acara</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratberitaacaraedit/'.$surat->idsuratberitaacara); ?>" method="post">
            <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul Berita Acara</label>
                        <input type="hidden" class="form-control" name="idsuratberitaacara" value="<?= $surat->idsuratberitaacara; ?>">
                        <input type="text" class="form-control" name="judul" value="<?= $surat->judul; ?>" placeholder="Contoh : Kuliah Umum How To Build Products at Tokopedia" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Mitra</label>
                        <input type="text" class="form-control" name="namamitra" value="<?= $surat->namamitra; ?>" placeholder="Contoh : Tokopedia" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Perwakilan Mitra</label>
                        <input type="text" class="form-control" name="namaperwakilanmitra" value="<?= $surat->namaperwakilanmitra; ?>" placeholder="Contoh : William Tanuwijaya" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Deskripsi / Isi Surat</label>
                        <textarea name="deskripsi" rows="10" class="form-control" value="<?= $surat->deskripsi; ?>" required><?= $surat->namamitra; ?></textarea>
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
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>