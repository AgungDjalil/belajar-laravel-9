<html>
	<head>
		<title>Blog</title>
	</head>
	<style>
		.blog{
			padding: 5px;
			border-bottom: 1px solid lightgray;
		}
	</style>
	<!-- css -->
	<link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<body>
		<div class="container">
			<h1>
				Blog Agung Firmansyah
				<a class="btn btn-success" href='{{ url("posts/create") }}'>+ Buat Postingan</a>
			</h1>
			@foreach($posts as $post)
				<div class="card mt-4">
					<div class="card-header">
						<h3>{{ $post->title }}</h3>
					</div>
					<div class="card-body">
					 	<h5 class="card-title"><p>{{ $post->content }}</p></h5>
					 	<p class="card-text">{{ date("d M Y H:i", strtotime($post->created_at)) }}</p> 
					 	<a href='{{ url("posts/$post->id") }}' class="btn btn-primary">Selengkapnya</a>
					 	<a href='{{ url("posts/$post->id/edit") }}' class="btn btn-warning">Edit</a>
					</div>
				</div>
			@endforeach
		<!-- javascrip -->
		<script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>