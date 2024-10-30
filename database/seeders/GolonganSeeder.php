<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("golongans")->whereNot("id", "=", null)->delete();

        $contain = ['II/A - Pengatur Muda', 'II/B - Pengatur Muda Tingkat I', 'II/C - Pengatur', 'II/D - Pengatur Tingkat I', 'III/A - Penata Muda', 'III/B - Penata Muda Tingkat I', 'III/C - Penata', 'III/D - Penata Tingkat I', 'IV/A - Pembina', 'IV/B - Pembina Tingkat I', 'IV/C - Pembina Utama Muda', 'IV/D - Pembina Utama Madya', 'IV/E - Pembina Utama'];

        for ($i = 0; $i < count($contain); $i++) {
            DB::table("golongans")->insert([
                "g_nama" => $contain[$i],
                "id" => Str::uuid()->toString(),
                "created_at" => now(),
            ]);
        }
    }
}
