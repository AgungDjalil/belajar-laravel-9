<html>
	<head>
		<title>Blog | buat Postingan</title>
		<link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>
		<h1>Buat Postingan</h1>
		<form method="POST" action='{{ url("posts") }}' class="form-control">
			@csrf
			
			<div class="mb-3">
  				<label for="exampleFormControlInput1" class="form-label">Judul</label>
  				<input type="text" class="form-control" name="title" id="exampleFormControlInput1">
			</div>
			<div class="mb-3">
  				<label for="exampleFormControlTextarea1" class="form-label">Konten</label>
  				<textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</body>
</html>