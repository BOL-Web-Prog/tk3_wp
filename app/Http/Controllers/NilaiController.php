<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nilai;


class NilaiController extends Controller
{
    function index(){
        $data['mahasiswa'] = Nilai::all();
        return view('Nilai_mahasiswa')->with('mahasiswa',$data['mahasiswa']);
    }

    function store(Request $request){
    //    $request->validate([
    //         'nik'=>'required',
    //         'nama'=>'required',
    //         'nilai_attendance'=>'required',
    //         'nilai_tugas'=>'required',
    //         'nilai_quiz'=>'required',
    //         'nilai_uas'=>'required',
    //         'nilai_praktek'=>'required'
    //     ]);
        $nilai = new Nilai([
            'nik'=>$request->nik,
            'nama_mahasiswa'=>$request->nama_mahasiswa,
            'nilai_attendance'=>$request->nilai_attendance,
            'nilai_tugas'=>$request->nilai_tugas,
            'nilai_quiz'=>$request->nilai_quiz,
            'nilai_praktek'=>$request->nilai_praktek,
            'nilai_uas'=>$request->nilai_uas
        ]);
        $nilai->save();

        return redirect()->intended('/')->with('success', 'Nilai berhasil ditambahkan');
    }
}
