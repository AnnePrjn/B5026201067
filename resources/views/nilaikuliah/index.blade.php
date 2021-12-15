@extends('layout.ceria')

@section('title', 'Nilai Kuliah')

@section('isikonten')

<h3>Nilai Kuliah</h3>
<a href="/nilaikuliah/tambah" class="btn btn-success"> + Tambah Data</a> <br><br>

<br>

<table class="table ">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
    </tr>
    @foreach($nilaikuliah as $n)
    <tr>
        <td>{{ $n->id }}</td>
        <td>{{ $n->nrp }}</td>
        <td>{{ $n->nilaiangka }}</td>
        <td>{{ $n->sks}}</td>
        <td>
            <?php
                if($n->nilaiangka <=40){
                    echo "D";
                } elseif ($n->nilaiangka >=41 && $n->nilaiangka <=60) {
                    echo "C";
                } elseif ($n->nilaiangka >=61 && $n->nilaiangka <=80) {
                    echo "B";
                } else{
                    echo "A";
                }
                ?>
        </td>
        <td>{{ number_format($n->nilaiangka * $n->sks, 0, ',', '.')}}</td>
        <td>
            <a href="/nilaikuliah/hapus/{{ $n->id }}" class="btn btn-danger" >Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $nilaikuliah->links()  }}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

@endsection
