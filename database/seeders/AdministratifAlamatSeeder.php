<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratifAlamatSeeder extends Seeder
{
    private static function insertDataFromJson(string $path, string $table, string $column)
    {
        DB::table($table)->whereNot("id", "=", null)->delete();

        $path = file_get_contents(public_path($path));
        $data = json_decode($path);

        foreach ($data as $value) {
            DB::table($table)->insert([
                $column => $value->name,
            ]);
        }
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        self::insertDataFromJson("data/provinces.json", "provinsis", "prov_nama");
        self::insertDataFromJson("data/city.json", "kabupatens", "kab_nama");
        self::insertDataFromJson("data/districts.json", "kecamatans", "kec_nama");
        self::insertDataFromJson("data/villages.json", "kelurahans", "kel_nama");
    }
}
