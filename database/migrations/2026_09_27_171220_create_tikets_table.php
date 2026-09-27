<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('Jenis_Tiket');
            $table->string('Kategori');
            $table->integer('Harga');
            $table->integer('Stok');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tikets');
    }
};