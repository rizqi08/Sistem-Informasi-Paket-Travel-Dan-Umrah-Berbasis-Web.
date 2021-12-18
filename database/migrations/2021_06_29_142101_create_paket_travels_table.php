<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaketTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_travels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug');
            $table->string('namapaket');
            $table->longText('deskripsi');
            $table->string('hotel');
            $table->string('maskapai');
            $table->string('jenispaket');
            $table->date('tgl_berangkat');
            $table->string('programhari');
            $table->string('bandara');
            $table->string('kamar');
            $table->string('type');
            $table->integer('harga');
            $table->softDeletes();
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
        Schema::dropIfExists('paket_travels');
    }
}
