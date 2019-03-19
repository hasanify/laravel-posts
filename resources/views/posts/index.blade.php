@extends('layouts.app')
@section('content')
<main role='main'>
 <section class="jumbotron text-center">
  <div class="container">
   <h1>
    <span style="font-family: sans-serif;font-family: 'Srisakdi', cursive; text-transform: none;">Welcome to</span>
   </h1>
   <h1 style="font-family: 'Righteous', cursive;"><span><</span><span style="color: #FFCC00;">Posts</span><span>/></span></h1>

   <hr style="width: 50%; border-width: 1px;">
   <p class="">A Laravel App.</p>
   <span style="font-size: large; font-weight: bolder">By <a href="https://github.com/hasanify">@hasanify</a></span>
   <p>
    @if(Auth::guest())
    <a href="{{ url('login') }}" class="btn btn-primary my-2">Login</a>
    <a href="{{ url('register') }}" class="btn btn-primary my-2">Signup</a>
    @endif
   </p>
  </div>
 </section>
 @if(Auth::guest())
 <div class="alert alert-danger">You must <a href="{{ url('login') }}">login</a> to view posts.</div>
 @endif
 @if(count($posts) > 0)
 <div class="bg-dark text-light card-header"><h1>Latest Posts</h1></div>
 <div style="padding-left: 10px; padding-right: 10px" class="album py-5 bg-light">
  <div class="row">			
   @foreach($posts as $post)
   <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
     <img style="border: 1px solid black; padding: 10px" src="{{ url('/storage/cover_images') }}/{{ $post->cover_image }}" class="bd-placeholder-img card-img-top" width="100%" height="225" preserveAspectRatio="xMidYMid slice"/>
     <div class="card-body">
      <p style="font-size: x-large; font-style: italic;" class="text-center card-text">
       @if(!Auth::guest())
       <a href="{{ url('posts') }}/{{ $post->id }}">
        {!! $post->title !!}
       </a>
       @else
       {!! $post->title !!}
       @endif
      </p>
      <p class="text-center card-text">By <strong>{{ $post->user->name }}</strong> on <strong>{{ date('d F, Y', strtotime($post->created_at)) }}</strong></p>
      @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
      <div class="align-items-center" style="display: inline-flex;">
       <a style="margin-right: 10px; width: 52px;" class="btn btn-sm btn-outline-primary" href="{{ url('/posts') }}/{{ $post->id }}/edit">Edit</a>
       {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
       {!! Form::hidden('_method' , 'DELETE') !!}
       {!! Form::submit('Delete'  , ['class' => 'btn btn-sm btn-outline-danger']) !!}
       {!! Form::close() !!}
      </div>
      @endif
      @endif
     </div>
    </div>
   </div>
   @endforeach
   <!--{{ $posts->links() }}-->
   @else
   No posts found
   @endif
   @endsection