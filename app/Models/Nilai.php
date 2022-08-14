<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table='tbl_nilai_mahasiswa';
    protected $fillable=[
        'nik',
        'nama_mahasiswa',
        'nilai_attendance',
        'nilai_tugas',
        'nilai_quiz',
        'nilai_praktek',
        'nilai_uas'
    ];
}
