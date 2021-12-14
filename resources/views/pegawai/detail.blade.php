@extends('layout.ceria')

@section('title', 'DETAIL DATA PEGAWAI')

@section('isikonten')

	<h3>Detail Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-link"> Kembali</a>

	<br/>
	<br/>

    @foreach($pegawai as $p)
        <div class="row">
            <div class="col-sm-1"><label class="form-label">Nama</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><label class="form-label">{{ $p->pegawai_nama }}</label></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Jabatan</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><label class="form-label">{{ $p->pegawai_jabatan }}</label></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Umur</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><label class="form-label">{{ $p->pegawai_umur }}</label></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Alamat</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><label class="form-label">{{ $p->pegawai_alamat }}</label></div>
        </div>


    @endforeach


    @endsection
