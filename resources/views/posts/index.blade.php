@extends('layouts.app')

@section('content')
<h1>Posts</h1>
@if(count($posts) > 0)
@foreach($posts as $post)
<ul class="list-group">
	<li class="list-group-item" style="background-color: #E3E3E3">
		<h4><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h4>
		<img src="http://localhost/social-network/storage/app/public/cover_images/{{ $post->cover_image }}" style="width: 30%;" alt=""/>
		<br>
		{{ $post->body }} <br>
		<small>Written on <strong> {{ $post->created_at }} </strong> by <strong> {{ $post->user->name }} </strong></small>
	</li>
	<br>
</ul>
@endforeach
{{ $posts->links() }}
@else
<p>No posts found</p>
@endif
@endsection
