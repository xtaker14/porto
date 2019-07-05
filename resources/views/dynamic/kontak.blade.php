<!-- Menghubungkan dengan view template master -->
@extends('dynamic/menu')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	@foreach($details as $val)
		{{$val}}<br>
	@endforeach
 
@endsection