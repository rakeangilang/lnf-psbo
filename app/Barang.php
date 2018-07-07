<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['id_user', 'nama_barang', 'deskripsi', 'tempat','waktu','foto_barang','jenis','status','kategori','created_at', 'updated_at'];

    protected $table = 'barangs';
}
