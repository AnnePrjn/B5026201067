<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaikuliahController extends Controller
{
    public function index()
    {
    	// mengambil data dari table nilaikuliah
    	//$nilaikuliah = DB::table('nilaikuliah')->get();
        $nilaikuliah = DB::table('nilaikuliah')->paginate(5);

    	// mengirim data nilaikuliah ke view index
    	return view('nilaikuliah.index',['nilaikuliah' => $nilaikuliah]);

    }

    // method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {

        // memanggil view tambah
        return view('nilaikuliah.tambah');

    }

    // method untuk insert data ke table nilaikuliah
    public function store(Request $request)
    {
        // insert data ke table nilaikuliah
        DB::table('nilaikuliah')->insert([
            'nrp' => $request->nrp,
            'nilaiangka' => $request->nilaiangka,
            'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman nilaikuliah
        return redirect('/nilaikuliah');

    }

        // method untuk hapus data nilaikuliah
        public function hapus($id)
        {
            // menghapus data nilaikuliah berdasarkan id yang dipilih
            DB::table('nilaikuliah')->where('id',$id)->delete();

            // alihkan halaman ke halaman nilaikuliah
            return redirect('/nilaikuliah');
        }

}
