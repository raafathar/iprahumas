<?php

namespace App\DTO\Registration;

readonly class RegistrationDTO
{
    public function __construct(
        public string $jabatan_id,
        public string $golongan_id,
        public string $instansi_id,
        public string $NIP,
        public string $f_unit_kerja,
        public string $f_no_wa,
        public string $f_jenis_kartu,
        public string $f_alamat,
        public string $f_bukti_pembayaran,
        public string $username,
        public string $email,
        public string $password,
        public Bool $isAccept,
    ) {}
}
