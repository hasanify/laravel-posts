@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span style="float: right"><a href="http://localhost/social-network/public/posts/create" class="btn btn-primary">Add Post</a><br></span></div>

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
            <h2>Your Posts</h2>
            <table class="table table-striped">
                <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td><a href="http://localhost/social-network/public/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a></td>
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
