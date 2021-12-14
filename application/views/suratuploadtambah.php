<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratuploadtambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="hidden" name="iduser" value="<?= $profil->iduser; ?>">
                        <input type="text" class="form-control" name="judul" placeholder="Contoh : Surat Izin Kerja Praktek PT.Pusri" required>
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
                        <label for="gambar">Foto / File</label>
                        <input type="file" class="form-control" name="gambar" id="gambar" required>
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>