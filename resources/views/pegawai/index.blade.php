@extends('layout.ceria')

@section('title', 'Data Pegawai')

@section('isikonten')

<h3>Data Pegawai</h3>
<a href="/pegawai/tambah" class="btn btn-success"> + Tambah Pegawai Baru </a> <br><br>

<div class="container" align='center'>
    <p>Cari Data Pegawai:</p>
    <form action="/pegawai/cari" method="GET">
    <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
    <input class="form-control btn-warning" type="submit" value="CARI">
</form>
</div>
<br>
<table class="table table-success table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $p->pegawai_nama }}</td>
        <td>{{ $p->pegawai_alamat }}</td>
        <td>
            <a href="/pegawai/detail/{{ $p->pegawai_id }}" class="btn btn-link" >View Detail</a>
            |
            <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning" >Edit</a>
            |
            <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger" >Hapus</a>

        </td>
    </tr>
    @endforeach
</table>

{{ $pegawai->links()  }}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
