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
        Schema::create('tbl_pesan_tiket_212356s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tbl_jadwal_kapal_212356_id');
            $table->text('nama_pesan_212356');
            $table->text('noHp_pesan_212356');
            $table->text('email_pesan_212356');
            $table->text('alamat_pesan_212356');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pesan_tiket_212356s');
    }
};
