<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
             $table->increments('id');
            $table->string('merk');
            $table->integer('stok');
            $table->integer('harga');
            $table->string('warna');
            $table->integer('ukuran');
            $table->integer('id_jenis')->unsigned();
            $table->foreign('id_jenis')->references('id')->on('jenis')
                ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('barangs');
    }
}
