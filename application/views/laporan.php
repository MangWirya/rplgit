<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Laporan</h1>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4 py-3 border-bottom-info">
            <div class="card-body">
                <H6>Laporan Pertahun</H6>
                <hr>
                <form target="_blank" action="<?= base_url('pengajuan/cetaklaporanpertahun') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <select name="tahun" id="tahun" class="form-control" required>
                                    <option value="">- Pilih Tahun -</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pull-right">
                        <button type="submit" class="btn btn-info pull-right" name="btnCetak" target="_blank">Cetak Surat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4 py-3 border-bottom-info">
            <div class="card-body">
                <H6>Laporan Perbulan</H6>
                <hr>
                <form target="_blank" action="<?= base_url('pengajuan/cetaklaporanperbulan') ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <select name="tahun" id="tahun" class="form-control" required>
                                    <option value="">- Pilih Tahun -</option>
                                    <option value="2017">2017</option>
                                    <option value="2018">2018</option>
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <select name="bulan" id="bulan" class="form-control" required>
                                    <option value="">- Pilih Bulan -</option>
                                    <option value="01">Januari</option>
                                    <option value="02">Februari</option>
                                    <option value="03">Maret</option>
                                    <option value="04">April</option>
                                    <option value="05">Mei</option>
                                    <option value="06">Juni</option>
                                    <option value="07">Juli</option>
                                    <option value="08">Agustus</option>
                                    <option value="09">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer pull-right">
                        <button type="submit" class="btn btn-info pull-right" name="btnCetak" target="_blank">Cetak Surat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>