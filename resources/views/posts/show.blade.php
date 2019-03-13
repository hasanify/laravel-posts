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
		<small>Written on <strong> {{ $post->created_at }} </strong> by <strong> {{ $post->user->name }} </strong></small>
	</div>
</div>
<br>
<div style="display: flex;">
	<a href="http://localhost/social-network/public/posts/{{ $post->id }}/edit" class="btn btn-primary" style="margin-right: 10px;">Edit</a>
	{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		{!! Form::hidden('_method' , 'DELETE') !!}
		{!! Form::submit('Delete' , ['class' => 'btn btn-danger']) !!}
	{!! Form::close() !!}
	</div>
@endsection
