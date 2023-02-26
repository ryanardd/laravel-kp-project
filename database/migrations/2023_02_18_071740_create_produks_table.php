<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            // $table->foreignId('review_id');
            $table->string('nama_produk');
            $table->string('slug');
            $table->string('harga');
            $table->integer('stok');
            $table->string('gambar_produk')->nullable();
            $table->text('deskripsi');
            $table->boolean('is_active');
            $table->integer('views');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
