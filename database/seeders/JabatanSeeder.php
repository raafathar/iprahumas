<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("jabatans")->whereNot("id", "=", null)->delete();
        $contain = ["Pranata Humas Ahli Utama", "Pranata Humas Ahli Madya", "Pranata Humas Ahli Muda", "Pranata Humas Ahli Pertama", "Pranata Humas Penyelia", "Pranata Humas Mahir", "Pranata Humas Terampil", "Calon Pranata Humas"];

        for ($i = 0; $i < count($contain); $i++) {
            DB::table("jabatans")->insert([
                "j_nama" => $contain[$i],
                "id" => Str::uuid()->toString(),
                "created_at" => now(),
            ]);
        }
    }
}
