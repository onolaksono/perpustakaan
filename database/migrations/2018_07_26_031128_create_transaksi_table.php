<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->char('id_transaksi',6)->unique();
            $table->char('id_buku',5);
            $table->string('id_anggota',25);
            $table->date('tgl_pinjam');
            $table->date('tgl_kembali');
            $table->enum('status_pinjam', ['Pinjam','Kembali']);
            $table->float('denda');
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
        Schema::dropIfExists('transaksi');
    }
}
