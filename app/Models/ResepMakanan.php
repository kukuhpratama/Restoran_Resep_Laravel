<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResepMakanan extends Model
{
    protected $table = "resep_makanan";
    protected $primaryKey = "id_resep";
    protected $fillable = ["nama_resep","id_kategori"];
    public $timestamps = false;
    public function kategori_makanan() {
        return $this->belongsTo(\App\Models\KategoriMakanan::class, 'id_kategori');
    }
    public function bahan_makan() {
        return $this->hasMany(\App\Models\BahanMakanan::class, 'id_resep');
    }
}
