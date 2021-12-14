@extends('layout.ceria')

@section('title', 'Data Bank')

@section('isikonten')

<h3>Data Bank</h3>
<a href="/bank/tambah" class="btn btn-success"> + Tambah Data Bank Baru </a> <br><br>

<div class="container" align='center'>
    <p>Cari Data Bank:</p>
    <form action="/bank/cari" method="GET">
    <input class="form-control" type="text" name="cari" placeholder="Cari Bank .." value="{{ old('cari') }}">
    <input class="form-control btn-warning" type="submit" value="CARI">
</form>
</div>

<br>

<table class="table ">
    <tr>
        <th>No</th>
        <th>Merk Bank</th>
        <th>Jumlah Bank</th>
        <th>Tersedia</th>
    </tr>
    @foreach($bank as $b)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $b->merkbank }}</td>
        <td>{{ $b->jumlahbank }}</td>
        <td>{{ $b->tersedia }}</td>
        <td>
            <a href="/bank/detail/{{ $b->kodebank }}" class="btn btn-info" >View Detail</a>
            <a href="/bank/edit/{{ $b->kodebank }}" class="btn btn-warning" >Edit</a>
            <a href="/bank/hapus/{{ $b->kodebank }}" class="btn btn-danger" >Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $bank->links()  }}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
