<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_tour_places', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tempat');

            $table->integer('kategori');
            // tipe jadiin tabel baru
            $table->string('tipe');
            $table->text('deskripsi');
            $table->integer('stok_tiket');
            $table->integer('harga');
            $table->time('jam_buka');

            // alamat jadiin tabel baru
            $table->string('alamat');
            $table->string('img_tempat');
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
        Schema::dropIfExists('tb_tour_places');
    }
};
