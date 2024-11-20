<?php

namespace App\DTO\Kabupaten;

readonly class KabupatenDTO
{
    public function __construct(
        public string $kab_nama,
    ) {}
}
