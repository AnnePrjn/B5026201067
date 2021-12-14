@extends('layout.ceria')

@section('title', 'TAMBAH DATA BANK')

@section('isikonten')

    <h3>Tambah Data Bank</h3>

    <a href="/bank" class="btn btn-link">Kembali</a>
    <br><br>

    <form action="/bank/store" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-1"> <label class="form-label"> Merk Bank</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><input type="text" name="merkbank" required="required"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">Jumlah Bank</label></div>
            <div class="col-sm-1"> : </div>
            <div class="col-sm-1"><input type="text" name="jumlahbank" required="required"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"> <label class="form-label">Tersedia</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"id="tersedia">
                <input type="radio" id="ada" name="tersedia" value="A">
                <label for="ada">Ada</label><br>
                <input type="radio" id="tidak" name="tersedia" value="T" checked="checked">
                <label for="tidak">Tidak Ada</label><br>
            </div>
        </div>


            <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

    @endsection
