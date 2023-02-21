@extends('layouts.app')

@section('title', 'Blog')

@section('content')
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
@endsection
			