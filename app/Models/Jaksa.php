<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaksa extends Model
{
    use HasFactory;
    protected $table = 'jaksa';

    protected $guarded = [];

    public function barangBukti(){
        return $this->hasMany(BarangBukti::class, 'id','id_jaksa');
    }
}
