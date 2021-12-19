<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Permohonan Tugas</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/surattugasedit/' . $surat->idsurattugas); ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul Tugas</label>
                        <input type="hidden" class="form-control" name="idsurattugas" value="<?= $surat->idsurattugas; ?>">
                        <input type="text" class="form-control" name="judultugas" value="<?= $surat->judultugas; ?>" placeholder="Contoh : Workshop Digital Pengabdian" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Penyelenggara Kegiatan</label>
                        <input type="text" class="form-control" name="penyelenggarakegiatan" value="<?= $surat->penyelenggarakegiatan; ?>" placeholder="Contoh : Universitas Indonesia" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea name="deskripsi" rows="5" class="form-control" placeholder="Melakukan Workshop Digital di Graha" value="<?= $surat->deskripsi; ?>" required><?= $surat->deskripsi; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" value="<?= $surat->tanggal; ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tanggalmulai" class="form-control" value="<?= $surat->tanggalmulai; ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" name="tanggalselesai" class="form-control" value="<?= $surat->tanggalselesai; ?>" required>
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i>Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>