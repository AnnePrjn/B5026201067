@extends('layout.ceria')

@section('title', 'Tambah Data Nilai Kuliah')

@section('isikonten')

    <h3>Tambah Data Nilai Kuliah</h3>

    <a href="/nilaikuliah" class="btn btn-link">Kembali</a>
    <br><br>

    <form action="/nilaikuliah/store" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">NRP</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><input type="text" name="nrp" required="required"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">Nilai Angka</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><input type="text" name="nilaiangka" required="required"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">SKS</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><input type="text" name="sks" required="required"></div>
        </div>


            <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

    @endsection
