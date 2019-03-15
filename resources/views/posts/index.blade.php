@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ url('/') }}">Index</a></li>
		<li class="breadcrumb-item active" aria-current="page">Posts</li>
	</ol>
</nav>
@if(count($posts) > 0)
@if(Auth::guest())
<div class="alert alert-warning">You must <a href="{{ url('login') }}">login</a> to view posts.</div>
@endif
@foreach($posts as $post)
<div class="card">
	<div id="head" class="card-header">
		<h4><a href="posts/{{ $post->id }}">{!! $post->title !!}</a></h4>
		
	</div>
	<div class="card-footer">
		<small><strong>{{ date('d F, Y', strtotime($post->created_at)) }}</strong> | <strong> {{ $post->user->name }} </strong></small>
		@if($post->created_at != $post->updated_at )
			<small style="float: right;">Edited: <strong>{{ date('d F, Y', strtotime($post->updated_at)) }}</strong></small>
			@endif
			@if(!Auth::guest())
	@if(Auth::user()->id == $post->user_id)
	<br>
	<div style="display: flex; float: right">
		<a href="{{ url('/posts') }}/{{ $post->id }}/edit" class="btn btn-outline-primary" style="margin-right: 10px; width: 72px;"> Edit </a>
		{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
		{!! Form::hidden('_method' , 'DELETE') !!}
		{!! Form::submit('Delete'  , ['class' => 'btn btn-outline-danger']) !!}
		{!! Form::close() !!}
			</div>
		@endif
		@endif

</div>
</div>
<br>
@endforeach
{{ $posts->links() }}
@else
<p>No posts found</p>
@endif
@endsection



