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
        Schema::create('barang_bukti', function (Blueprint $table) {
            $table->id();
            $table->string('no_reg', 25);
            $table->string('nama_terpidana', 50);
            $table->string('jenis', 30);
            $table->string('no_tgl_putusan', 50);
            $table->enum('status',['publish','pending'])->default('pending');
            $table->foreignId('id_jaksa')->nullable()->constrained('jaksa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_buktis');
    }
};
