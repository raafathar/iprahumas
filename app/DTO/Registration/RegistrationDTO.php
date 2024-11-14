<?php

namespace App\DTO\Registration;

readonly class RegistrationDTO
{
    public function __construct(
        public string $username,
        public string $email,
        public string $jabatan_id,
        public string $golongan_id,
        public string $agama,
        public string $instansi_id,
        public string $NIP,
        public string $f_unit_kerja,
        public string $f_pendidikan_terakhir,
        public string $f_universitas,
        public string $f_tanggal_lahir,
        public string $f_keahlian,
        public string $f_kelurahan,
        public string $f_kecamatan,
        public string $f_kabupaten,
        public string $f_provinsi,
        public string $f_no_wa,
        public string $f_alamat,
        public string $f_bukti_pembayaran,
        public Bool $isAccept,
    ) {}
}
