@extends('layouts.app')

@section('content')
<a href="/social-network/public/posts/" class="btn btn-outline-dark"><< Go Back</a>
<br><br>
<div class="card">
	<div id="head" class="card-header">
		<h1>{!! $post->title !!}</h1>

	</div>
	<div class="card-body">

		{!! $post->body !!} <br>
		<small>Written on {{ $post->created_at }}</small>
	</div>
</div>
<br>
	<a href="http://localhost/social-network/public/posts/{{ $post->id }}/edit" class="btn btn-outline-primary" style="width: 20%">Edit</a>
	<br>
@endsection
