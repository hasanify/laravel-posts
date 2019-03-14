@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/') }}">Index</a></li>
    <li class="breadcrumb-item active" aria-current="page">Posts</li>
  </ol>
</nav>
@if(count($posts) > 0)
@foreach($posts as $post)
<div class="card">
	<div id="head" class="card-header">
		<h4><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h4>
	</div>
		<div class="card-footer">
		<small>Written on <strong> {{ $post->created_at }} </strong> by <strong> {{ $post->user->name }} </strong></small>
	</div>
</div>
<br>
@endforeach
{{ $posts->links() }}
@else
<p>No posts found</p>
@endif
@endsection



