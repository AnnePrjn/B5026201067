<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BankController extends Controller
{
    public function index()
    {
    	// mengambil data dari table bank
    	//$bank = DB::table('bank')->get();
        $bank = DB::table('bank')->paginate(5);

    	// mengirim data bank ke view index
    	return view('bank.index',['bank' => $bank]);

    }

    // method untuk menampilkan view form tambah bank
    public function tambah()
    {

        // memanggil view tambah
        return view('bank.tambah');

    }

    // method untuk insert data ke table bank
    public function store(Request $request)
    {
        // insert data ke table bank
        DB::table('bank')->insert([
            'merkbank' => $request->merkbank,
            'jumlahbank' => $request->jumlahbank,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bank
        return redirect('/bank');

    }

    // method untuk edit data bank
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $bank = DB::table('bank')->where('kodebank',$id)->get();
        // passing data bank yang didapat ke view edit.blade.php
        return view('bank.edit',['bank' => $bank]);

    }

    public function view($id)
    {
        // mengambil data bank berdasarkan id yang dipilih
        $bank = DB::table('bank')->where('kodebank',$id)->get();
        // passing data bank yang didapat ke view detail.blade.php
        return view('bank.detail',['bank' => $bank]);

    }

    // update data bank
    public function update(Request $request)
    {
        // update data bank
        DB::table('bank')->where('kodebank',$request->id)->update([
            'merkbank' => $request->merkbank,
            'jumlahbank' => $request->jumlahbank,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman bank
        return redirect('/bank');
    }

    // method untuk hapus data bank
    public function hapus($id)
    {
        // menghapus data bank berdasarkan id yang dipilih
        DB::table('bank')->where('kodebank',$id)->delete();

        // alihkan halaman ke halaman bank
        return redirect('/bank');
    }

    //method untuk mencari data bank
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    	// mengambil data dari table bank sesuai pencarian data
		$bank = DB::table('bank')
		->where('merkbank','like',"%".$cari."%")
		->paginate();

    	// mengirim data pegawai ke view index
		return view('bank.index',['pegawai' => $bank]);

	}
}
