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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_reservasi');
            $table->enum('sesi',[ '06:00','06:30','07:00','07:30','08:00','08:30','16:00','16:30',
                                '17:00','17:30','18:00','18:30','19:00','19:30']);
            $table->enum('layanan',['Bumil','KB','Imunisasi']);
            $table->string('keterangan');
            $table->unsignedBigInteger("user_id");
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
