<html>
	<head>
		<title>@yield('title')</title>
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
		@include('layouts.app.header')
		<div class="container">

			@yield('content')

			@include('layouts.app.footer')
		</div>
		
		<!-- javascrip -->
		<script src="{{ asset('bootstrap-5/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>