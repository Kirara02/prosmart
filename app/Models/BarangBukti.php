<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangBukti extends Model
{
    use HasFactory;
    protected $table = 'barang_bukti';
    protected $guarded = [];

    public function jaksa(){
        return $this->hasOne(Jaksa::class, 'id','id_jaksa');
    }

    public function jenis(){
        return $this->hasOne(JenisBarangBukti::class, 'id','id_jenis_barang_bukti');
    }

}
