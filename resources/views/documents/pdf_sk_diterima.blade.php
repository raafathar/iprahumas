<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SK Diterima</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        @page {
            size: A4;
            font-family: Arial, sans-serif;
            /* margin: 20mm; */
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
            line-height: 1.5;
            margin: 0;
            background-color: #f8f9fa;
        }

        .page-container {
            width: 210mm;
            min-height: 297mm;
            background-color: white;
            padding: 20mm;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
            position: relative;
        }

        h6 {
            font-size: 14px;
        }

        .table td,
        .table th {
            padding: 4px;
        }
    </style>
</head>

<body>
    <div class="page-container">
        <div class="row">
            <div class="col-3 d-flex justify-content-center align-items-center">
                <img src="{{ asset('assets/images/logos/logo_sk.png') }}" alt="Kop Surat Keputusan Diterima"
                    class="img-fluid" style="max-height: 150px;">
            </div>
            <div class="col-9 p-0" style="margin-left: -30px;">
                <div class="text-center">
                    <h2 class="mb-3 fw-bold">IKATAN PRANATA HUMAS INDONESIA (IPRAHUMAS)</h2>
                    <span>JL. MEDAN MERDEKA BARAT 9, JAKARTA 10110</span><br>
                    <span>Website: www.iprahumas.id</span>
                </div>
            </div>
        </div>

        <hr class="border border-1 border-dark opacity-100">

        <h6 class="text-center fw-bold mt-2">KEPUTUSAN KETUA UMUM IKATAN PRANATA HUMAS INDONESIA</h6>
        <h6 class="text-center fw-bold">NOMOR: 1212/IPRAHUMAS/SK.ANGGOTA/1/2024</h6>
        <h6 class="text-center fw-bold">TENTANG</h6>
        <h6 class="text-center fw-bold">KEANGGOTAAN IKATAN PRANATA HUBUNGAN MASYARAKAT</h6>
        <table class="table table-borderless lh-sm">
            <tr>
                <td style="width: 20%">Menetapkan</td>
                <td>:</td>
                <td>Keanggotaan Aparatur Sipil Negara pada Ikatan Pranata Humas Indonesia sebagai berikut:</td>
            </tr>
        </table>
        <table class="table table-borderless lh-sm">
            <tr>
                <td>1.</td>
                <td style="width: 30%">Nama</td>
                <td>:</td>
                <td>{{ $data->user->username }}</td>
            </tr>
            <tr>
                <td>2.</td>
                <td>NIP</td>
                <td>:</td>
                <td>{{ $data->NIP }}</td>
            </tr>
            <tr>
                <td>3.</td>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td>Gresik, 02 Juli 2002</td>
            </tr>
            <tr>
                <td>4.</td>
                <td>Jabatan</td>
                <td>:</td>
                <td>{{ $data->jabatan[0]->j_nama }}</td>
            </tr>
            <tr>
                <td>5.</td>
                <td>Unit Kerja</td>
                <td>:</td>
                <td>{{ $data->f_unit_kerja }}</td>
            </tr>
            <tr>
                <td>6.</td>
                <td>Instansi</td>
                <td>:</td>
                <td>{{ $data->instansi[0]->i_nama }}</td>
            </tr>
            <tr>
                <td>7.</td>
                <td>Nomor Anggota Baru</td>
                <td>:</td>
                <td>202401063</td>
            </tr>
        </table>

        <table class="table table-borderless lh-sm">
            <tr>
                <td style="width: 20%">KESATU</td>
                <td>:</td>
                <td>Terhitung sejak 2 Januari 2024 s.d. 31 Desember 2024 disahkan sebagai anggota aktif Ikatan Pranata
                    Humas Indonesia (IPRAHUMAS).</td>
            </tr>
            <tr>
                <td style="width: 20%">KEDUA</td>
                <td>:</td>
                <td>Memiliki hak sebagai anggota aktif IPRAHUMAS dan memiliki kewajiban untuk
                    membayar iuran kas organisasi per tahun.</td>
            </tr>
            <tr>
                <td style="width: 20%">KETIGA</td>
                <td>:</td>
                <td>Keputusan Ketua Umum ini mulai berlaku sejak tanggal ditetapkan.</td>
            </tr>
        </table>

        <table class="table table-borderless lh-sm">
            <tr>
                <td style="width: 60%"></td>
                <td>Ditetapkan di</td>
                <td></td>
                <td>Jakarta</td>
            </tr>
            <tr>
                <td></td>
                <td>Pada tanggal</td>
                <td></td>
                <td>{{ date('d F Y', strtotime(now())) }}</td>
            </tr>
        </table>

        <h6 class="text-center mt-2 mb-4">PENGURUS PUSATAN IKATAN PRANATA HUMAS INDONESIA</h6>

        <table class="table table-borderless lh-sm text-center">
            <tr>
                <td>KETUA UMUM,</td>
                <td>SEKRETARIS UMUM,</td>
            </tr>
            <tr>
                <td style="height: 100px"></td>
                <td></td>
            </tr>
            <tr>
                <td>THARIQ RAMADANI</td>
                <td>LIZZATUL FARHATININGSIH</td>
            </tr>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
