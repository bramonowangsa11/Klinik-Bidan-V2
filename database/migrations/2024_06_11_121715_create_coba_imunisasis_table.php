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
        Schema::create('coba_imunisasis', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal')->default(now());
            $table->double('berat_badan');
            $table->double('panjang_badan');
            $table->boolean('HBO');
            $table->boolean('BCG');
            $table->string('kipi');
            $table->string('vaksin');
            $table->enum('PENTA',['0','1','2','3']);
            $table->enum('IPV',['0','1','2','3']);
            $table->enum('PCV',['0','1','2','3']);
            $table->enum('ROTA_VIRUS',['0','1','2','3']);
            $table->boolean('MK');
            $table->enum('booster',['PENTA','MK','0']);
            $table->unsignedBigInteger('id_anak');
            $table->unsignedBigInteger('id_ortu');
            $table->foreign('id_anak')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('id_ortu')->references('id')->on('pasiens')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coba_imunisasis');
    }
};
