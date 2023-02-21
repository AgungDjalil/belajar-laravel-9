@extends('layouts.app')

@section('title', 'Judul: $posts->title')

@section('content')
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
@endsection