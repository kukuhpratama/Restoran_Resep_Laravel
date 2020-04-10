<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriMakanan extends Model
{
    protected $table = "kategori_makanan";
    public $timestamps = false;
    protected $fillable = ["nama_kategori"];
    protected $primaryKey = "id_kategori";
    public function resep_makan() {
        return $this->hasMany(\App\Models\ResepMakanan::class, 'id_kategori');
    }
}
