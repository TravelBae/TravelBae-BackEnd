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
        Schema::create('tb_events', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event');
            $table->string('tipe');
            $table->text('regulasi');
            $table->integer('stok');
            $table->integer('harga');
            $table->time('jam_mulai');
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
        Schema::dropIfExists('tb_events');
    }
};
