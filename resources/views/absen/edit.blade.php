<!DOCTYPE html>
<html>
<head>
	<title>Tugas PWB Query Builder </title>
</head>
<body>

	<h2>Tugas PWB Query Builder</h2>
	<h3>Edit Data Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	@foreach($absen as $p)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->absen_id }}"> <br/>
		ID <input type="text" required="required" name="id" value="{{ $p->absen_id }}"> <br/>
		IDPegawai <input type="text" required="required" name="idpegawai" value="{{ $p->absen_idpegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tanggal" value="{{ $p->absen_tanggal }}"> <br/>
		Status <input type="text" required="required" name="status" value="{{ $p->absen_status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
