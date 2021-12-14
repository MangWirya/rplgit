<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Profil Saya</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?=base_url('dashboard/update_profil');?>" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="hidden" name="iduser" value="<?=$profil->iduser;?>">
                        <input type="text" class="form-control" name="nik" id="nik" value="<?=$profil->nik;?>"
                            readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama"
                            value="<?=$profil->nama;?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tempatlahir">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatlahir" id="tempatlahir"
                            value="<?=$profil->tempatlahir;?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tanggallahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggallahir" id="tanggallahir"
                            value="<?=$profil->tanggallahir;?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin</label>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option value="Pria" <?=$profil->jeniskelamin=='Pria'?'selected':'';?>>Laki-Laki</option>
                            <option value="Wanita" <?=$profil->jeniskelamin=='Wanita'?'selected':'';?>>Perempuan
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <option value="Islam" <?=$profil->agama=='Islam'?'selected':'';?>>Islam</option>
                            <option value="Kristen Protestan" <?=$profil->agama=='Kristen Protestan'?'selected':'';?>>
                                Kristen Protestan</option>
                            <option value="Kristen Katholik" <?=$profil->agama=='Kristen Katholik'?'selected':'';?>>
                                Kristen Katholik</option>
                            <option value="Hindu" <?=$profil->agama=='Hindu'?'selected':'';?>>Hindu</option>
                            <option value="Budha" <?=$profil->agama=='Budha'?'selected':'';?>>Budha</option>
                            <option value="Konghucu" <?=$profil->agama=='Konghucu'?'selected':'';?>>Konghucu</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5"
                            class="form-control"><?=$profil->alamat;?></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?= $profil->pekerjaan; ?>" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="notlp">No Telp</label>
                        <input type="text" class="form-control" name="notlp" id="notlp" value="<?= $profil->notlp; ?>" >
                    </div>
                </div>
                <hr>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" id="email"
                            value="<?=$profil->email;?>" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                        <span class="text-danger" style="font-size:10pt;">Biarkan kosong jika tidak ingin merubah
                            password</span>
                    </div>
                </div>
                <div class="p-3 float-right">
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan
                        Perubahan</button>
                </div>
            </div>
        </form>
    </div>
</div>