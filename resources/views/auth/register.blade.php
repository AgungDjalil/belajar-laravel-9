@extends('layouts.app')

@section('title', 'register')

@section('content')
	<div class="row">
				<div class="card-body">
					<h1 class="text-center">register</h1>

					@if(session()->has('error_message'))
						<div class="alert alert-danger">
							{{ session()->get('error_message') }}
						</div>
					@endif
					<form method="POST" action='{{ url("register") }}'>
						@csrf
					  	<div class="mb-3">
						   <label for="exampleInputPassword1" class="form-label">Nama</label>
						   <input type="text" class="form-control" name="name" id="exampleInputPassword">
						   @if($errors->has('name'))
						   	<span class="text-danger">{{ $errors->first('name') }}</span>
						   @endif
					  	</div>
						<div class="mb-3">
						   <label for="exampleInputEmail1" class="form-label">Email address</label>
						   <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
						   <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						   @if($errors->has('email'))
						   	<span class="text-danger">{{ $errors->first('email') }}</span>
						   @endif
						 </div>
						<div class="mb-3">
						   <label for="exampleInputPassword1" class="form-label">Password</label>
						   <input type="password" class="form-control" name="password" id="exampleInputPassword">
						   @if($errors->has('name'))
						   	<span class="text-danger">{{ $errors->first('password') }}</span>
						   @endif
					  	</div>
					  	<div class="mb-3">
						   <label for="exampleInputPassword1" class="form-label">Konfirmasi password</label>
						   <input type="password" class="form-control" name="password_confirmation" id="exampleInputPassword">
					  	</div>
					  <button type="submit" class="btn btn-primary">Daftar</button>
				</form>
			</div>
	</div>

@endsection