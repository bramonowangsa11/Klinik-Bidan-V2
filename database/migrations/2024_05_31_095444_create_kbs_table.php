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
        Schema::create('kbs', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_kb');
            $table->integer('jmlh_anak');
            $table->integer('umur_anak_terkecil');
            $table->string('jaminan');
            $table->string('alki');
            $table->string('pasca_plasenta');
            $table->string('pasca_salin');
            $table->string('do');
            $table->string('gc_dari');
            $table->enum('metode_kb',['IUD','STK','PIL','CO']);
            $table->integer('berat_badan');
            $table->integer('tinggi_badan');
            $table->string('tensi');
            $table->integer('lila');
            $table->date('tgl_kembali');
            $table->string('kegagalan');
            $table->string('inform_consent');
            $table->string('keterangan');
            $table->unsignedBigInteger('id_suami');
            $table->unsignedBigInteger('id_ibu');
            $table->foreign('id_suami')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('id_ibu')->references('id')->on('pasiens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kbs');
    }
};
