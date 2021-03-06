<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengembalianBerkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengembalian_berkas', function (Blueprint $table) {
            $table->id();
            $table->string('no_berkas', 10)->unique();
            $table->date('tgl_kembali');
            $table->integer('jml_berkas');
            $table->string('nama_peminjam');
            $table->string('uraian');
            $table->string('unit_pengolah');
            $table->string('nama_petugas');
            $table->string('kategori_petugas');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengembalian_berkas');
    }
}
