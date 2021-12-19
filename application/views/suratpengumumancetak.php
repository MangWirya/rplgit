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
                        <font size="4"><b>SURAT PENGUMUMAN</b></font>
                        <br><br>
                        <font size="2"><b><?= $surat->judulpengumuman; ?></b></font>
                        <br><br>
                        <font size="2"><b>NOMOR: <?= $surat->idsuratupload . '/P/C/FTI/2021' ?></b></font>
                        <br><br>
                        <font size="2">TANGGAL SURAT: <?= $this->pengajuan_m->format_tanggal($surat->tanggal) . '/P/C/FTI/2021' ?></font>
                    </center>
                </td>
            </tr>
        </table>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">
                        <?= $surat->isipengumuman; ?>
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <table width="625">
            <tr>
                <td>
                    <font size="2">Demikian Surat Pengumuman ini dibuat dengan sebenarnya, untuk dapat dipergunakan sebagaimana mestinya.
                    </font>
                </td>
            </tr>
        </table>
        <br>
        <center>
            <font size="2">
                Yogyakarta,<?= $this->pengajuan_m->format_tanggal($surat->tanggal) ?>
                <br><br>
                Mengetahui
            </font>
        </center>
        <br><br>
        <table width="625">
            <tr>
                <td width="50"></td>
                <td width="320">Dekan, <br><br><br><br><br><?= $surat->ttd; ?></b></td>
            </tr>
        </table>
    </center>
    <script>
        window.print();
    </script>
</body>

</html>