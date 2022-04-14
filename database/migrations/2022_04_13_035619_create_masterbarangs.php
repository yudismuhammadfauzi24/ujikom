<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterbarangs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterbarangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_barang');
            $table->string('nama_barang');  
            $table->string('stock');
            $table->string('brand');
            $table->string('uom');
            $table->string('price');
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
        Schema::dropIfExists('masterbarangs');
    }
}
