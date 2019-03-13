<!DOCTYPE html>
<html lang="{{ config('app.locale.') }}">
<head>
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ '~public/css/bootstrap.css' }}">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<title>Posts-Project</title>
</head>
<body>
	@include('inc.navbar')
	<div class="container">
		@include('inc.messages')
		@yield('content')
	</div>
	@include('inc.footer')
	<script src="http://localhost/social-network/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
	<script>
		CKEDITOR.replace( 'article-ckeditor' );
	</script>
</body>
</html>