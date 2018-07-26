<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    
    protected $table='jenis';
    protected $primaryKey='id';
    public $incrementing =true;
    public $timestamps=true;
  
      protected $fillable = [
        'id_jenis','nama_jenis','created_at','updated_at',
      ];
}
