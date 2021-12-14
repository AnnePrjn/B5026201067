@extends('layout.ceria')

@section('title', 'DETAIL DATA BANK')

@section('isikonten')

	<h3>Detail Data Bank</h3>

	<a href="/bank" class="btn btn-link"> Kembali</a>

	<br/>
	<br/>

    @foreach($bank as $b)
        <div class="row">
            <div class="col-sm-1"><label class="form-label">Merk Bank</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><label class="form-label">{{ $b->merkbank}}</label></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Jumlah Bank</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><label class="form-label">{{ $b->jumlahbank }}</label></div>
        </div>

        <div class="row">
            <div class="col-sm-1"><label class="form-label">Tersedia</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><label class="form-label">{{ $b->tersedia }}</label></div>
        </div>


    @endforeach


    @endsection
