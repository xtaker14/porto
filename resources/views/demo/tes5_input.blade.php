<!DOCTYPE html>
<html>
<head>
	<title>demo input</title>
</head>
<body>

	<form action="/tes5_input/proses" method="POST">
		<input type = "hidden" name = "_token" value = "<?= csrf_token() ?>">
      
      	Nama :
		<input type="text" name="nama"> <br/>
		Alamat :
		<input type="text" name="alamat"> <br/>
		<input type="submit" value="Simpan">
	</form>

</body>
</html>