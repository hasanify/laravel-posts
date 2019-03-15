@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
 <ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ url('/') }}">Index</a></li>
  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
 </ol>
</nav>
<div class="container">
 <div class="row justify-content-center">
  <div class="col-md-8">
   <div class="card">
    <div class="card-header">Dashboard <i class="fa fa-address-card-o"></i> <span style="float: right"><a href="{{ url('/posts/create') }}" class="btn btn-primary">Add Post</a><br></span></div>
    <div class="card-body">
     @if (session('status'))
     <div class="alert alert-success" role="alert">
      {{ session('status') }}
     </div>
     @endif
     Welcome, <b>{{ Auth::user()->name }} !</b>
    </div>
   </div>
   <br>
   @if(count($posts) > 0)
   <table class="table table-striped table-light">
    <tr>
     <th>Your Posts</th>
     <th></th>
     <th></th>
    </tr>
    @foreach($posts as $post)
    <tr>
     <td><a href="{{ url('/posts') }}/{{ $post->id }}">{!! $post->title !!}</td>
      <td><a href="{{ url('/posts') }}/{{ $post->id }}/edit" class="btn btn-primary"><i class="fa fa-pencil"></i> Edit</a></td>
      <td>{!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
       {!! Form::hidden('_method' , 'DELETE') !!}
       {!! Form::submit('Delete' , ['class' => 'btn btn-danger']) !!}
      {!! Form::close() !!}</td>
     </tr>
     @endforeach
    </table>
    @else
    <p><strong>You have no posts.</strong></p>
    @endif
   </div>
  </div>
 </div>
 @endsection