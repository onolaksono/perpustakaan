<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table='transaksi';
    protected $primaryKey='id';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'id_transaksi','id_buku','id_anggota','tgl_pinjam','tgl_kembali','status_pinjam','denda','created_at','updated_at',
      ];
}
