<html>
	<head>
		<title>
			Blog | Judul: {{ $posts->id }}
		</title>
		<!-- css -->
	<link href="{{ asset('bootstrap-5/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="{{ asset('css/blog.css') }}" rel="stylesheet" crossorigin="anonymous">
	<link href="">
	</head>
	<body>
		<div class="container">
			<article class="blog-post">
        		<h2 class="blog-post-title">{{ $posts->title }}</h2>
        		<p class="blog-post-meta">{{ date("d M Y H:i", strtotime($posts->created_at)) }}</p>

        		<p>{{ $posts->content }}</p>
        		<small class="text-muted">{{ $totalComments }} komentar</small>
        		@foreach($comments as $comment)
        			<div class="card mb-3">
        				<div class="card-body">
        					<p style="font-size: 8pt;">{{ $comment->comments }}</p>
        				</div>
        			</div>
        		@endforeach
        		<a href='{{ url("posts") }}'>kembali</a>
      		</article>
		</div> 
	</body>
</html>