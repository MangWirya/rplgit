<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Permohonan Izin Kegiatan</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratuploadverifikasi/' . $surat->idsuratupload); ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="hidden" class="form-control" name="idsuratupload" value="<?= $surat->idsuratupload; ?>">
                        <input type="text" class="form-control" name="judul" value="<?= $surat->judul; ?>" placeholder="Contoh : Surat Izin Kerja Praktek PT.Pusri" required readonly>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= $surat->tanggal; ?>" required readonly>
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
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>