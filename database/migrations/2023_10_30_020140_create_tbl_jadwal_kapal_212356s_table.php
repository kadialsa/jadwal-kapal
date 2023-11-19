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
        Schema::create('tbl_jadwal_kapal_212356s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tbl_list_kapal_212356_id');
            $table->string('pelabuhan_asal_212356');
            $table->string('tanggal_berangkat_212356');
            $table->string('jam_berangkat_212356');
            $table->string('pelabuhan_tujuan_212356');
            $table->string('tanggal_tiba_212356');
            $table->string('jam_tiba_212356');
            $table->float('harga_tiket_212356');
            $table->timestamps();
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_jadwal_kapal_212356s');
    }
};
