<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Pengumuman</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratpengumumantambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul Pengumuman</label>
                        <input type="hidden" name="iduser" value="<?= $profil->iduser; ?>">
                        <input type="text" class="form-control" name="judulpengumuman" placeholder="Contoh : Pengumuman Libur Peringatan Hari Kemerdekaan" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Isi Pengumuman</label>
                        <textarea name="isipengumuman" placeholder="Libur Tanggal 15-18 Agustus Peringatan Hari Kemerdekaan" rows="10" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ttd">Tanda Tangan Pengumuman</label>
                        <select name="ttd" id="ttd" class="form-control">
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