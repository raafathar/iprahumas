<?php

namespace App\DTO\Kecamatan;

readonly class KecamatanDTO
{
    public function __construct(
        public string $kec_nama,
    ) {}
}
