<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisBarangBukti extends Model
{
    use HasFactory;

    protected $table = 'jenis_barang_bukti';

    protected $guarded = [''];

    // public function BarangBukti(){
    //     return $this->hasMany(BarangBukti::class, '')
    // }
}
