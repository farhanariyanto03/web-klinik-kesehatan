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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->integer('no_antrian');
            $table->char('NO_RM', 6);
            $table->unsignedBigInteger('id_dokter');
            $table->text('diagnosa')->nullable();
            $table->text('code')->nullable();
            $table->date('tggl_pemeriksaan');
            $table->text('resep_obat')->nullable();
            $table->string('status', 30);
            $table->timestamps();

            $table->foreign('NO_RM')->references('NO_RM')->on('data_pasiens')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id')->on('logins')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
