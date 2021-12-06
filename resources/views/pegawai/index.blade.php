@extends('layout.ceria')

@section('title', 'Data Pegawai')

@section('isikonten')

<h3>Data Pegawai</h3>
<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru </a>
<br><br>
<table class="table table-success table-striped">
    <tr>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Umur</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>
    @foreach($pegawai as $p)
    <tr>
        <td>{{ $p->pegawai_nama }}</td>
        <td>{{ $p->pegawai_jabatan }}</td>
        <td>{{ $p->pegawai_umur }}</td>
        <td>{{ $p->pegawai_alamat }}</td>
        <td>
            <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning" >Edit</a>
            |
            <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger" >Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
