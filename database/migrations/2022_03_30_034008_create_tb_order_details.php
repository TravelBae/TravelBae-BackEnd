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
        Schema::create('tb_order_details', function (Blueprint $table) {
            $table->id('id_order_detail');
            $table->integer('id_tempat');
            $table->integer('id_event');
            $table->integer('id_order');
            $table->string('atas_nama');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_order_details');
    }
};
