<!doctype html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
	</head>
	<body>
		tes 3 <br>
		nama saya : {{$nama}}<br>

		@foreach($details as $val)
			{{$val}}<br>
		@endforeach
	</body>
</html>