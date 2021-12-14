@extends('layout.ceria')

@section('title', 'TAMBAH ABSEN PEGAWAI')

@section('isikonten')

    <h3>Tambah Absen Pegawai</h3>

    <a href="/absen" class="btn btn-link">Kembali</a>
    <br><br>

    <form action="/absen/store" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-2"><label class="form-label">Pegawai</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"> <select id="IDPegawai" name="IDPegawai" required="required">
                @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}"> {{ $p->pegawai_nama }}</option>
                @endforeach
            </select></div>
        </div>

        <div class="row">
            <div class="col-sm-2"><label class="form-label">ID Pegawai</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="text" name="idpegawai" required="required">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2"><label class="form-label">Tanggal</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1"><input type="date" name="tanggal" value={{date("Y-m-d")}} required="required">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2"><label class="form-label">Status</label></div>
            <div class="col-sm-1">:</div>
            <div class="col-sm-1">
                <input type="radio" id="hadir" name="status" value="H">
            <label for="html">
                HADIR
            </label>
            <br>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="alpha" name="status" value="A" checked>
                <label for="html">
                    ALPHA
                </label>
                <br>
            </div>
            <div class="col-sm-1">
                <input type="radio" id="izin" name="status" value="I">
            <label for="html">
                IZIN
            </label>
            <br>
            </div>
            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

    @endsection
