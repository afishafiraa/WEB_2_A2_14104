<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create14104ModelMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('14104_model_mahasiswa', function (Blueprint $table) {
            $table->increments('id_member');
			$table->string('name');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('macAddress');
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
        Schema::dropIfExists('14104_model_mahasiswa');
    }
}
