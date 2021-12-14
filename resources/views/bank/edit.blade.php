@extends('layout.ceria')

@section('title', 'EDIT DATA BANK')

@section('isikonten')

	<h3>Edit Data Bank</h3>

	<a href="/bank" class="btn btn-link"> Kembali</a>

	<br/>
	<br/>

    @foreach($bank as $b)
    <form action="/bank/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $b->kodebank }}"> <br/>
        <div class="row">
            <div class="col-sm-1"><label class="form-label">Merk Bank</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="text" required="required" name="merkbank" value="{{ $b->merkbank }}"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Jumlah Bank</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="text" required="required" name="jumlahbank" value="{{ $b->jumlahbank }}"></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Tersedia</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"id="tersedia">
                <input type="radio" id="ada" name="tersedia" value="A" @if($b->tersedia === "A") checked="checked" @endif>
                <label for="ada">Ada</label><br>
                <input type="radio" id="tidak" name="tersedia" value="T" @if($b->tersedia === "T") checked="checked" @endif>
                <label for="tidak">Tidak Ada</label><br>
            </div>
        </div>


        <br>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
    @endforeach


    @endsection
