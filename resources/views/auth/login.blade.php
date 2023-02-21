@extends('layouts.app')

@section('title', 'login')

@section('content')
	<div class="row">
				<div class="card-body">
					<h1 class="text-center">Login</h1>

					@if(session()->has('error_message'))
						<div class="alert alert-danger">
							{{ session()->get('error_message') }}
						</div>
					@endif
					<form method="POST" action="{{ url('login') }}" class="fotm-control">
						@csrf
						<div class="mb-3">
						   <label for="exampleInputEmail1" class="form-label">Email address</label>
						   <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
						   <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
						 </div>
						 <div class="mb-3">
						   <label for="exampleInputPassword1" class="form-label">Password</label>
						   <input type="password" class="form-control" name="password" id="exampleInputPassword">
					  </div>
					  <button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
	</div>

@endsection