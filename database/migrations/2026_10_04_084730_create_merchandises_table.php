<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('merchandises', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Merchandise');
            $table->string('Kategori');
            $table->integer('Harga');
            $table->integer('Stok');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('merchandises');
    }
};