@extends('layouts.app')

@section('content')

	<div class="jumbotron text-center" style="margin-top: 80px">
		<main role="main" class="inner cover">
			<h2 class="cover-heading">Welcome to </h2><h1><<span style="font-weight: bolder; color: #FFCC00">Posts</span>/></h1>
			<hr style="width: 50%">
			<p class="lead">This is a PHP project made using <strong>Laravel</strong>. <br>
			By <a target="_blank" style="font-weight: bolder; text-decoration: blink;" href="https://github.com/hasanify">@hasanify</a>
			</p>
			<p class="lead">
				<a href="posts" class="btn btn-lg btn-outline-secondary">See Posts</a>
			</p>
		</main>
	</div>
	<script>
function scrollWin() {
  window.scrollTo(0, 600);
}
</script>
@endsection
