<!DOCTYPE html>
<html>
<head>
	<title>Tugas PWB Query Builder</title>
</head>
<body>

	<h2>Tugas PWB Query Builder</h2>
	<h3>Data Absen</h3>

	<a href="/absen"> Kembali</a>

	<br/>
	<br/>

	<form action="/absen/store" method="post">
		{{ csrf_field() }}
		ID <input type="text" name="id" required="required"> <br/>
		IDPegawai <input type="text" name="idpegawai" required="required"> <br/>
		Tanggal <input type="date" name="tanggal" required="required"> <br/>
		Status <input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
