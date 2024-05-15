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
        Schema::create('data_pasiens', function (Blueprint $table) {
            $table->char('NO_RM', 6)->primary();
            $table->bigInteger('NIK');
            $table->string('nama_pasien', 30);
            $table->date('tggl_lahir');
            $table->string('jenis_kelamin', 15);
            $table->string('agama', 10);
            $table->string('status', 20);
            $table->string('pendidikan_terakhir', 10);
            $table->string('alamat');
            $table->char('no_hp', 13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pasiens');
    }
};
