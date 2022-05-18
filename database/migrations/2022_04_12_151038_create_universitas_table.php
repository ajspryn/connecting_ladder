<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitas', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('foto_cover')->nullable();
            $table->string('nama_universitas')->unique();
            $table->text('deskripsi');
            $table->string('provinsi');
            $table->string('kabkota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('alamat');
            $table->string('alamat_email')->nullable()->unique();
            $table->string('no_telp')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('universitas');
    }
}
