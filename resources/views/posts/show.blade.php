@extends('layouts.app')

@section('content')
<!--<a href="/social-network/public/posts/" class="btn btn-outline-dark"><i class="fa fa-chevron-left"></i>Go Back</a>-->
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ url('/') }}">Index</a></li>
		<li class="breadcrumb-item"><a href="{{ url('/posts') }}">Posts</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{ $post->id }}</li>
	</ol>
</nav>
<div class="card">
	<div id="head" class="card-header">
		<h1>{!! $post->title !!}</h1>

	</div>
	<div class="card-body">
		<p>
			<img src="{{ url('/storage/cover_images') }}/{{ $post->cover_image }}" 
			style="width: 30%;" alt=""/>
		</p>
		<p>{!! $post->body !!} </p></div>
		<div class="card-footer">
			<small><strong>{{ date('d F, Y', strtotime($post->created_at)) }}</strong> | <strong> {{ $post->user->name }} </strong></small>
			@if($post->created_at != $post->updated_at )
			<small style="float: right;">Edited: <strong>{{ date('d F, Y', strtotime($post->updated_at)) }}</strong></small>
			@endif
		</div>
	</div>
	<br>
	@if(!Auth::guest())
	@if(Auth::user()->id == $post->user_id)
	<div style="display: flex;">
		<a href="{{ url('/posts') }}/{{ $post->id }}/edit" class="btn btn-outline-primary" style="margin-right: 10px; width: 72px;"> Edit </a>
		{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		{!! Form::hidden('_method' , 'DELETE') !!}
		{!! Form::submit('Delete'  , ['class' => 'btn btn-outline-danger']) !!}
		{!! Form::close() !!}
	</div>
	@endif
	@endif
	@endsection
