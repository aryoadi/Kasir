<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigIncrements('id_transaksi');
            $table->unsignedbigInteger('id_detail_order');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_order');
            $table->date('tanggal');
            $table->integer('total_bayar');
            $table->timestamps();
            $table->foreign('id_detail_order')->references('id_detail_order')->on('detail_order');
            $table->foreign('id_user')->references('id_user')->on('users');
            $table->foreign('id_order')->references('id_order')->on('order');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
