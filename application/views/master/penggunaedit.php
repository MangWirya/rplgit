<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#level").change(function() {
            if ($(this).val() != "user") {
                $("#nim").hide();
            } else {
                $("#nim").show();
            }
        });
    });
</script>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Pengguna</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?= base_url('master/pengguna/penggunaedit/' . $profil->iduser); ?>" method="post">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="control-label">Level</label>
                        <select name="level" id="level" class="form-control" required>
                            <option value="" selected>---- Pilih Level ----</option>
                            <option value="user">Mahasiswa</option>
                            <option value="admin">Admin</option>
                            <option value="dosen">Dosen</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6" id="nim" style="display: none">
                    <div class="form-group">
                        <label for="nip">NIM</label>
                        <input type="text" class="form-control" name="nim" value="<?= $profil->nim ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" value="<?= $profil->nik ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $profil->nama ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" value="<?= $profil->tempatlahir ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir" id="tanggallahir" value="<?= $profil->tanggallahir ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option value="Pria" <?= $profil->jeniskelamin == 'Pria' ? 'selected' : ''; ?>>Laki-Laki</option>
                            <option value="Wanita" <?= $profil->jeniskelamin == 'Wanita' ? 'selected' : ''; ?>>Perempuan
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="Islam" <?= $profil->agama == 'Islam' ? 'selected' : ''; ?>>Islam</option>
                            <option value="Kristen Protestan" <?= $profil->agama == 'Kristen Protestan' ? 'selected' : ''; ?>>
                                Kristen Protestan</option>
                            <option value="Kristen Katholik" <?= $profil->agama == 'Kristen Katholik' ? 'selected' : ''; ?>>
                                Kristen Katholik</option>
                            <option value="Hindu" <?= $profil->agama == 'Hindu' ? 'selected' : ''; ?>>Hindu</option>
                            <option value="Budha" <?= $profil->agama == 'Budha' ? 'selected' : ''; ?>>Budha</option>
                            <option value="Konghucu" <?= $profil->agama == 'Konghucu' ? 'selected' : ''; ?>>Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $profil->pekerjaan ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="notlp">No Telp</label>
                        <input type="text" class="form-control" name="notlp" id="notlp" value="<?= $profil->notlp; ?>" >
                    </div>
                </div>
                <hr>
                <div class="col-md-6" id="email">
                    <div class="form-group" id="otherFieldDiv">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $profil->email ?>">
                    </div>
                </div>
                <div class="col-md-6" id="password" style="display: none">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password"></input>
                        <span class="text-danger" style="font-size:10pt;">Biarkan kosong jika tidak ingin merubah
                            password</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control" value="<?= $profil->alamat ?>" required><?= $profil->alamat ?></textarea>
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>