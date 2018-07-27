@extends('layouts.app')

@section('content')
    <section class="jumbotron text-center col-md-8">
        <div class="container">
            <h1 class="jumbotron-heading">pigglet</h1>
            <p class="lead text-muted">Welcome retarded publishers</p>
            <p>
                <a href="{{ url('/post/create') }}" class="btn btn-primary my-2">Write a post</a>
                <a href="#" class="btn btn-secondary my-2">bleh</a>
            </p>
        </div>
    </section>
    
        
    <div class="container col-md-8">
        <ol class="post-title">
            @foreach( $posts as $post)
            <li>
                <a class="h4" href="/post/{{$post->id}}">{{$post->title}}</a>
                <span class="text-muted date-right"> {{ $post->updated_at->diffForHumans()}}
                </span>
            </li>
            @endforeach
        </ol>
    </div>
@endsection