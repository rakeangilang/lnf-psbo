<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klaim extends Model
{
    protected $fillable = ['id_user','id_barang','foto_barang','nama_barang','deskripsi','status'];
    protected $table = 'klaims';
}
