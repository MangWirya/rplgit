<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        table {
            border-style: double;
            border-width: 3px;
            border-color: white;
        }

        table tr .text2 {
            text-align: right;
            font-size: 13px;
        }

        table tr .text {
            text-align: center;
            font-size: 13px;
        }

        table tr td {
            font-size: 13px;
        }

        .gayatable {
            border: 1px solid black;
            border-collapse: collapse;
        }

        @page {
            size: auto;
            margin: 0;
        }
    </style>
</head>

<body>
    <br><br><br>
    <center>
        <table width="625">
            <tr>
                <td><img src="<?= base_url('assets/logo.png') ?>" width="70" height="90"></td>
                <td>
                    <font size="4">UNIVERSITAS KRISTEN DUTA WACANA<br><b>FAKULTAS TEKNOLOGI INFORMASI</b></font><br>
                    <font size="2">- PROGRAM STUDI INFORMATIKA<BR>- PROGRAM STUDI SISTEM INFORMASI
                    </font><br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <hr>
                    <br>
                    <center>
                        <font size="4"><b>SURAT IZIN KEGIATAN</b></font>
                        <br><br>
                        <font size="2"><b>NOMOR: <?= $surat->idsuratizinkegiatan . '/SIK/C/FTI/2021' ?></b></font>
                        <br><br>
                        <font size="2">TANGGAL SURAT: <?= $this->pengajuan_m->format_tanggal($surat->tanggal) . '/SIK/C/FTI/2021' ?></font>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Dengan ini Dekan Fakultas Teknologi Informasi Universitas Kristen Duta Wacana Yogyakarta memberikan cuti kepada mahasiswa yang di bawah ini :
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="555" class="gayatable">
            <thead>
                <th class="gayatable">Nama</th>
                <th class="gayatable">NIM</th>
            </thead>
            <?php
            $profil = $this->auth_m->getme($surat->iduser);
            ?>
            <tbody>
                <tr>
                    <td class="gayatable"><?=  $profil->nama; ?></td>
                    <td align="center" class="gayatable"><?= $profil->nim; ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Untuk Melaksanakan Kegiatan Yaitu : <?= $surat->judulkegiatan; ?> dengan Penyelenggara : <?= $surat->penyelenggarakegiatan; ?>.
                        <br><br>Demikian surat izin cuti ini dibuat untuk dapat dipergunakan sebagaimana perlunya.
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <?php
                $now = date("Y-m-d");
                ?>
                <td><?= $this->pengajuan_m->format_tanggal($surat->tanggal) ?><br><b>Dekan, <?php echo date_indo($now); ?><br><br><br><br><br><?= $surat->ttd; ?></b></td>
            </tr>
        </table>
    </center>
    <script>
        window.print();
    </script>
</body>

</html>