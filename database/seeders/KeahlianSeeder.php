<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeahlianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("keahlians")->whereNot("id", "=", null)->delete();
        $contain = ["Riset Public Relation", "Monitoring Media", "Ajang Khusus Kehumasan", "Protokoler", "Moderator", "Konfersi Pers", "Penanganan Krisis", "MC", "Materi Ringkasan", "Manajemen Isu dan Opini Publik", "Public Speaking", "Publikasi Institusi", "Juru Bicara", "Lobby dan Negoisasi", "Community Relations", "Opini atau Artikel", "Digital Public Relations", "Goverment Relations", "Desain Grafis", "Video Grafis", "Konten Kreator", "Social Media Spesialis"];

        for ($i = 0; $i < count($contain); $i++) {
            DB::table("keahlians")->insert([
                "k_nama" => $contain[$i],
                "created_at" => now(),
            ]);
        }
    }
}
