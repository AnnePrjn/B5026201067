@extends('layout.ceria')

@section('title', 'EDIT DATA PEGAWAI')

@section('isikonten')

	<h3>Edit Pegawai</h3>

	<a href="/pegawai" class="btn btn-secondary"> Kembali</a>

	<br/>
	<br/>

    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class="row">
            <div class="col-sm-1"><label class="form-label">Nama</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Jabatan</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Umur</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Alamat</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea></div>
        </div>
        <br>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endforeach


    @endsection
