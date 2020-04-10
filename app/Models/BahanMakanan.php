<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BahanMakanan extends Model
{
    protected $primaryKey = "id_bahan";
    protected $table = "bahan_makanan";
    protected $fillable = ["id_resep","bahan"];
    public $timestamps = false;
    public function resep_makanan() {
        return $this->belongsTo(\App\Models\ResepMakanan::class, 'id_resep');
    }
}
