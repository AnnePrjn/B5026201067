@extends('layout.ceria')

@section('title', 'TAMBAH DATA PEGAWAI')

@section('isikonten')

    <h3>Tambah Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-secondary">Kembali</a>
    <br><br>

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-1"> <label class="form-label"> Nama</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><input type="text" name="nama" required="required"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">Jabatan</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><input type="text" name="jabatan" required="required"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">Umur</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="number" name="umur" required="required"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">Alamat</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><textarea name="alamat" required="required"></textarea></div>
        </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

    @endsection
