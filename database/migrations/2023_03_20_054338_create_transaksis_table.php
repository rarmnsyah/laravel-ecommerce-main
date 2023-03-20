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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pembeli')->unsigned()->nullable();
            $table->foreign('id_pembeli')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('id_penjual')->unsigned()->nullable();
            $table->foreign('id_penjual')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('product_id')->unsigned()->nullable();
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->integer('jumlah');
            $table->integer('harga_produk');
            $table->integer('harga_total');
            $table->integer('tax');
            $table->enum('status', ['finished', 'unfinished'])->default('unfinished');
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
        Schema::dropIfExists('transaksis');
    }
};
