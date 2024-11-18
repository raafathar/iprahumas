<?php

namespace Database\Seeders;

use App\Helper\standartData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdministratifAlamatSeeder extends Seeder
{
    use standartData;

    private static function insertDataFromJson(string $path, string $table, callable $callBack): void
    {
        DB::table($table)->whereNot("id", "=", null)->delete();

        $path = file_get_contents(public_path($path));
        $data = json_decode($path);

        foreach ($data as $value) {
            $callBack($table, $value);
        }
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        self::insertDataFromJson("data/provinces.json", "provinsis", function ($table, $value) {
            DB::table($table)->insert($this->baseCreateData([
                "prov_nama" => $value->name,
            ], true));
        });

        self::insertDataFromJson("data/city.json", "kabupatens", function ($table, $value) {
            DB::table($table)->insert($this->baseCreateData([
                "kab_nama" => $value->name,
                "provinsi_id" => $value->provinsi_id
            ], true));
        });

        self::insertDataFromJson("data/districts.json", "kecamatans", function ($table, $value) {
            DB::table($table)->insert($this->baseCreateData([
                "kec_nama" => $value->name,
                "kabupaten_id" => $value->kabupaten_id
            ], true));
        });

        self::insertDataFromJson("data/villages.json", "kelurahans", function ($table, $value) {
            DB::table($table)->insert($this->baseCreateData([
                "kel_nama" => $value->name,
                "kecamatan_id" => $value->kecamatan_id
            ], true));
        });
    }
}
