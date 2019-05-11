<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePenyewaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_penyewaan', function (Blueprint $table) {
            $table->Increments('id_penyewaan');
            $table->string('nama_ruangan');
            $table->string('nama_mahasiswa');
            $table->string('nim');
            $table->date('tgl_sewa');
            $table->date('tgl_selesai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_penyewaan');
    }
}
