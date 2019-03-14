@extends('layouts.app')
@section('content')
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost/social-network/public">Index</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/social-network/public/posts">Posts</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Post</li>
  </ol>
</nav>
<h1>Add Post</h1>
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
	{{ Form::label('title', 'Title') }}
	{{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title..']) }}
</div>

<div class="form-group">
	{{ Form::label('body', 'Body') }}
	{{ Form::textarea('body', '', ['id' => 'article-ckeditor' , 'class' => 'form-control', 'placeholder' => 'Body Text..']) }}
</div>
<div class="form-group">
{!! Form::file('cover_image') !!}
	</div>

{{ Form::submit('Submit', ['class' => 'btn btn-outline-success']) }}
{!! Form::close() !!}
@endsection
<br>

