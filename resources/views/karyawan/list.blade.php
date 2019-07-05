<!DOCTYPE html>
<html>
<head>
	<title>DEMO CRUD LIST</title>
</head>
<body>
 
	<h3>Data Karyawan</h3>

	<a href="/karyawan/tambah"> + Tambah Karyawan Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Nama</th> 
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->nama }}</td> 
			<td>{{ $p->umur }}</td>
			<td>{{ $p->alamat }}</td>
			<td>
				<a href="/karyawan/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/karyawan/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>