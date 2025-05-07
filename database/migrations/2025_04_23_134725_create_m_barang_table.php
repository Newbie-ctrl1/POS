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
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id');
            $table->unsignedBigInteger('category_id')->index();
            $table->string('barang_kode',10)->unique();
            $table->string('barang_name', 100);
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->timestamps();
            $table->foreign('category_id')->references('category_id')->on('m_category');

        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
