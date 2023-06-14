<?php

namespace App\Models;

use App\Models\BuktiGallery;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';
    protected $guarded = [];

    public function gallery(){
        return $this->hasMany(BuktiGallery::class,'id_pengajuan', 'id');
    }

}
