<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->char('id_buku',5)->unique();
            $table->char('id_kelas',5);
            $table->char('id_jenis',5);
            $table->char('id_lokasi',5);
            $table->string('judul_buku',100);
            $table->string('pengarang',25);
            $table->string('penerbit',25);
            $table->integer('tahun_terbit');
            $table->string('deskripsi',100);
            $table->enum('kondisi_buku', ['Baru','Bekas']);
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
        Schema::dropIfExists('buku');
    }
}
