<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->foreignUuid("user_id")->constrained("users");
            // Data Pribadi
            $table->foreignUuid("jabatan_id")->constrained("jabatans");
            $table->foreignUuid("golongan_id")->constrained("golongans");
            $table->foreignUuid("instansi_id")->constrained("instansis");
            $table->string("NIP")->unique();
            $table->enum("f_agama", ["islam", "kristen", "katolik", "hindu", "budha", "khonghucu"]);
            $table->date("f_tanggal_lahir");
            $table->string("f_alamat");
            $table->string("f_provinsi");
            $table->string("f_kecamatan");
            $table->string("f_kelurahan");
            //2
            $table->foreignId("keahlian_id")->constrained("keahlians");
            $table->enum("f_pendidikan_terakhir", ['SMA', 'D3', 'D4/S1', 'S2', 'S3']);
            $table->string("f_universitas")->nullable();
            $table->string("f_unit_kerja");
            $table->string("f_no_wa");
            $table->string("f_bukti_pembayaran");
            $table->boolean("isAccept")->default(False);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
