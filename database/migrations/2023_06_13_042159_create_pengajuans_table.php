<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->timestamp('tgl_pengajuan');
            $table->string('nama_pemohon',50);
            $table->string('nama_terdakwa',50);
            $table->string('no_handphone',15);
            $table->text('alamat');
            $table->string('jenis', 20);
            $table->string('ktp');
            $table->text('catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
