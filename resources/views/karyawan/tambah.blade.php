<!DOCTYPE html>
<html>
<head>
	<title>Demo Membuat CRUD Pada Laravel</title>
</head>
<body>

	<!-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> -->
	<h3>Data Karyawan</h3>

	<a href="/karyawan"> Kembali</a>
	
	<br/>
	<br/>

	@if($this_case =='tambah')   
		<form action="/karyawan/proccess" method="post">
			{{ csrf_field() }} 
			Nama 
			<input type="text" name="nama" required="required">
			<br/> 

			Umur
			<input type="number" name="umur" required="required">
			<br/>

			Alamat
			<textarea name="alamat" required="required"></textarea>
			<br/>

			<input type="submit" name="submit" value="Simpan Data">
		</form>
	@else
		@foreach($karyawan as $k)
			<form action="/karyawan/proccess" method="post">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $k->id }}">

				Nama 
				<input type="text" value="{{ $k->nama }}" name="nama" required="required">
				<br/> 

				Umur
				<input type="number" value="{{ $k->umur }}" name="umur" required="required">
				<br/>

				Alamat
				<textarea name="alamat" required="required">{{ $k->alamat }}</textarea>
				<br/>

				<input type="submit" name="submit" value="Ubah Data">
			</form>
		@endforeach
	@endif 

</body>
</html>