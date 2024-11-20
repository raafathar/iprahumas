<?php

namespace App\DTO\Kelurahan;

readonly class KelurahanDTO
{
    public function __construct(
        public string $kel_nama,
    ) {}
}
