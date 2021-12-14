@extends('layout.ceria')

@section('title', 'ABSEN PEGAWAI')

@section('isikonten')

<h3>Absen Pegawai</h3>
<a href="/absen/tambah" class="btn btn-primary"> + Tambah Data Absen Baru </a>
<br><br>
<table class="table table-success table-striped">
    <tr>
        <th>ID</th>
        <th>Nama Pegawai</th>
        <th>Tanggal</th>
        <th>Status</th>
        <th>Opsi</th>
    </tr>
    @foreach($absen as $p)
    <tr>
        <td>{{ $p->absen_id  }}</td>
        <td>{{ $p->pegawai_nama}}</td>
        <td>{{ $p->absen_tanggal }}</td>
        <td>{{ $p->absen_status }}</td>
        <td>
            <a href="/absen/edit/{{ $p->absen_id }}" class="btn btn-warning" >Edit</a>
            |
            <a href="/absen/hapus/{{ $p->absen_id }}" class="btn btn-danger" >Hapus</a>
        </td>
    </tr>
    @endforeach
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
