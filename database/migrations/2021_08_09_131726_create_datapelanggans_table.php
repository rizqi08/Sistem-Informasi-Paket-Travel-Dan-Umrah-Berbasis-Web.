<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapelanggansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapelanggans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('namalengkap');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('ktp');
            $table->string('telp');
            $table->string('no_passport');
            $table->text('alamat');
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
        Schema::dropIfExists('datapelanggans');
    }
}
