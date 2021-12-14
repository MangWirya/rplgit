<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Surat Permohonan Izin Kegiatan</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('pengajuan/suratizinkegiatantambah'); ?>" method="post">
            <div class="row">
            <div class="col-md-12">
                    <div class="form-group">
                        <label>Judul Kegiatan</label>
                        <input type="hidden" name="iduser" value="<?= $profil->iduser; ?>">
                        <input type="text" class="form-control" name="judulkegiatan" placeholder="Contoh : Lomba Desain Poster Pekan Seni Nasional " required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Nama Penyelenggara Kegiatan</label>
                        <input type="text" class="form-control" name="penyelenggarakegiatan" placeholder="Contoh : Universitas Indonesia" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Alasan Izin</label>
                        <textarea name="alasanizin" rows="5" class="form-control" placeholder="Izin Karna Mengikuti Lomba" required></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Mulai Izin</label>
                        <input type="date" name="tanggalmulai" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Tanggal Selesai Izin</label>
                        <input type="date" name="tanggalselesai" class="form-control" required></textarea>
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Ajukan Permohonan Surat</button>
                </div>
            </div>
        </form>
    </div>
</div>