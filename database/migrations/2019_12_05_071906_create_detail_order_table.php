<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_order', function (Blueprint $table) {
            $table->bigIncrements('id_detail_order');
            $table->unsignedbigInteger('id_order');
            $table->unsignedbigInteger('id_masakan');
            $table->text('keterangan');
            $table->string('status_detail_order');
            $table->timestamps();

            $table->foreign('id_order')->references('id_order')->on('order');
            $table->foreign('id_masakan')->references('id_masakan')->on('masakan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_order');
    }
}
