<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahanMakananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan_makanan', function (Blueprint $table) {
            $table->bigIncrements('id_bahan');
            $table->string('bahan', 100);
            $table->unsignedBigInteger('id_resep');

            $table->foreign('id_resep')->references('id_resep')->on('resep_makanan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bahan_makanan');
    }
}
