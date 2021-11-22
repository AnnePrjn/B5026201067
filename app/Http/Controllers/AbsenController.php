<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AbsenController extends Controller
{
    public function index()
    {
    	// mengambil data dari table absen
    	$absen = DB::table('absen')->get();

    	// mengirim data absen ke view index
    	return view('absen.index',['absen' => $absen]);

    }


    public function tambah()
    {

        // memanggil view tambah
        return view('absen.tambah');

    }

    // method untuk insert data ke table absen
    public function store(Request $request)
    {
        // insert data ke table absen
        DB::table('absen')->insert([
            'absen_id' => $request->id,
            'absen_idpegawai' => $request->idpegawai,
            'absen_tanggal' => $request->tanggal,
            'absen_status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');

    }

    // method untuk edit data absen
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $absen = DB::table('absen')->where('absen_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('absen.edit',['absen' => $absen]);

    }

    // update data absen
    public function update(Request $request)
    {
        // update data absen
        DB::table('absen')->where('absen_id',$request->id)->update([
            'absen_id' => $request->id,
            'absen_idpegawai' => $request->idpegawai,
            'absen_tanggal' => $request->tanggal,
            'absen_status' => $request->status
        ]);
        // alihkan halaman ke halaman absen
        return redirect('/absen');
    }

    // method untuk hapus data absen
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('absen')->where('absen_id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/absen');
    }
}
