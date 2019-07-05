<!DOCTYPE html>
<html>
<head>
	<title>Dynamic Menu</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<header>

		<h2>Dynamic Menu</h2>
		<nav>
			<a href="/home">HOME</a>
			|
			<a href="/home/tentang">TENTANG</a>
			|
			<a href="/home/kontak">KONTAK</a>
		</nav>
	</header>
	<hr/>
	<br/>
	<br/>

	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman') </h3>

	<!-- bagian konten blog -->
	@yield('konten')


	<br/>
	<br/>
	<hr/>
	<footer>
		<p>&copy; <a href="#">www.bakri.com</a> - 2019</p>
	</footer>
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	<script>
		$(document).ready(function(){
			// alert('tes');
		});
	</script>
</body>
</html>