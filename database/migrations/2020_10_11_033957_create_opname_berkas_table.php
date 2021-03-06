<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpnameBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opname_berkas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_klarifikasi', 10)->unique();
            $table->string('no_berkas');
            $table->year('tahun');
            $table->string('kategori_berkas');
            $table->string('uraian_berkas');
            $table->string('jml_berkas');
            $table->string('jml_boks');
            $table->string('no_boks');
            $table->string('lokasi');
            $table->string('ket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opname_berkas');
    }
}
