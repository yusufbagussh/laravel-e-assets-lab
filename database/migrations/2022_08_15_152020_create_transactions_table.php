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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('transaksi_id');
            $table->unsignedBigInteger('transaksi_item');
            $table->unsignedBigInteger('transaksi_peminjam');
            $table->unsignedBigInteger('transaksi_jumlah');
            $table->date('transaksi_tgl_pinjam');
            $table->integer('transaksi_lama_pinjam');
            $table->date('transaksi_tgl_kembali');
            $table->integer('transaksi_denda')->nullable();
            $table->string('transaksi_status');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamps();
        });

        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('transaksi_item')->references('item_id')->on('items');
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('transaksi_peminjam')->references('peminjam_id')->on('borrowers');
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('created_by')->references('id')->on('users');
        });
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
};
