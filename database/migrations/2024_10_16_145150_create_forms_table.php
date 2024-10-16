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
            $table->foreignId("user_id")->constrained("users");
            $table->foreignId("jabatan_id")->constrained("jabatans");
            $table->foreignId("golongan_id")->constrained("golongans");
            $table->foreignId("instansi_id")->constrained("golongans");
            $table->string("NIP")->unique();
            $table->string("f_unit_kerja");
            $table->string("f_no_wa");
            $table->enum("f_jenis_kartu", ["EMONEY", "FLAZZ"]);
            $table->string("f_alamat");
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
