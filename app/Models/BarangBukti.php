<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangBukti extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jaksa(){
        return $this->hasOne(Jaksa::class, 'id_jaksa','id');
    }
}
