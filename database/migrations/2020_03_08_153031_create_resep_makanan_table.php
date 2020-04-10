<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepMakananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep_makanan', function (Blueprint $table) {
            $table->bigIncrements('id_resep');
            $table->string('nama_resep', 100);
            $table->unsignedBigInteger('id_kategori');

            $table->foreign('id_kategori')->references('id_kategori')->on('kategori_makanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep_makanan');
    }
}
