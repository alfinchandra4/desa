<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotensidesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potensi_desa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_potensi_desa_id')->constrained('kategori_potensi_desa');
            $table->string('photo_path');
            $table->string('name');
            $table->char('phone');
            $table->string('social')->nullable();
            $table->string('social1')->nullable();
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
        Schema::dropIfExists('potensi_desa');
    }
}
