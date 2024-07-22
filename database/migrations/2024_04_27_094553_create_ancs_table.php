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
        Schema::create('ancs', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pemeriksaan');
            $table->string('REG');
            $table->string('no_kk');
            $table->boolean('buku_kia');
            $table->string('pekerjaan_ibu');
            $table->string('pekerjaan_suami');
            $table->string('pddk_ibu');
            $table->string('pddk_suami');
            $table->string('paritas');
            $table->string('parsing');
            $table->boolean('p4k');
            $table->date('HPPT');
            $table->date('HPL');
            $table->string('umur_kehamilan');
            $table->string('anamnesa');
            $table->integer('TB');
            $table->integer('LILA');
            $table->integer('BB');
            $table->integer('TFU');
            $table->string('tensi');
            $table->string('status_TT1_K1');
            $table->string('TM');
            $table->string('FE');
            $table->string('BAT_LAIN');
            $table->string('DJJ');
            $table->string('KEPALA_THD_PAP');
            $table->string('TBJ');
            $table->string('PRESENTASI');
            $table->string('HB');
            $table->string('Protein_urine');
            $table->string('GOLDAR');
            $table->string('HBSAG');
            $table->string('IMS');
            $table->string('HIV');
            $table->boolean('HDK');
            $table->boolean('ABORTUS');
            $table->boolean('PERDARAHAN');
            $table->boolean('INFEKSI');
            $table->boolean('KPD');
            $table->string('LAIN_LAIN');
            $table->string('RUJUK');
            $table->integer('trisemester1');
            $table->integer('trisemester2');
            $table->integer('trisemester3');
            $table->string('FR');
            $table->string('keterangan');
            $table->unsignedBigInteger('id_suami');
            $table->unsignedBigInteger('id_istri');
            $table->foreign('id_suami')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('id_istri')->references('id')->on('pasiens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ancs');
    }
};
