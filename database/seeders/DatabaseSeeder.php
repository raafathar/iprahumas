<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(JabatanSeeder::class);
        $this->call(InstansiSeeder::class);
        $this->call(GolonganSeeder::class);
        $this->call(KeahlianSeeder::class);
        $this->call(AdministratifAlamatSeeder::class);
    }
}
