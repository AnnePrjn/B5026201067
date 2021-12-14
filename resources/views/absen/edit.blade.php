@extends('layout.ceria')

@section('title', 'EDIT ABSEN PEGAWAI')

@section('isikonten')

    <h3>Edit Data Absen</h3>
    <a href="/absen" class="btn btn-link"> Kembali</a>
    <br/>
    <br/>
    @foreach($absen as $p)
    <form action="/absen/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->absen_id }}"> <br/>

        <div class="row">
            <div class="col-sm-2"><label class="form-label">ID Pegawai</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="text" required="required" name="idpegawai" value="{{ $p->absen_idpegawai }}">
            </div>
        </div>


        <div class="row">
            <div class="col-sm-2"><label class="form-label">Tanggal</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="date" required="required" name="tanggal" value="{{ $p->absen_tanggal }}">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2"><label class="form-label">Status</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><div class="col-sm-1">
                <input type="radio" id="hadir" name="status" value="{{$p->absen_status}}" required>
            <label for="html">
                HADIR
            </label>
            <br>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="alpha" name="status" value="A" checked="checked" required>
                <label for="html">
                    ALPHA
                </label>
                <br>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="izin" name="status" value="I" checked="checked" required>
            <label for="html">
                IZIN
            </label>
            <br>
            </div>
        </div>


        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
    @endforeach

@endsection
