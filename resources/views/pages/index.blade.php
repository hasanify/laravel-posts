@extends('layouts.app')

@section('content')
	<div class="jumbotron text-center" style="margin-top: 10%">
		<main role="main" class="inner cover">
			<h2 class="cover-heading">Welcome to </h2><h1><div style="font-weight: bolder; color: #FFCC00">Posts-Project</div></h1>
			<hr style="width: 50%">
			<p class="lead">This is a PHP project made using <strong>Laravel</strong>. <br>
			By <a target="_blank" style="font-weight: bolder; text-decoration: blink;" href="https://github.com/hasanify">@hasanify</a>
			</p>
			<p class="lead">
				<a href="posts" class="btn btn-lg btn-outline-secondary">See Posts <i class="fa fa-chevron-right"></i></a>
			</p>
		</main>
	</div>
@endsection
