<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblNilaiMahasiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nilai_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->text('nama_mahasiswa');
            $table->Integer('nilai_attendance');
            $table->Integer('nilai_quiz');
            $table->Integer('nilai_tugas');
            $table->Integer('nilai_praktek');
            $table->Integer('nilai_uas');
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
        //
    }
}
