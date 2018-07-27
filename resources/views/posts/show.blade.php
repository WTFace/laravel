@extends('layouts.app')

@section('content')

<div class="container text-left">
    <div class="post">
        <h1 class="post-title">
            {{$post->title}}
        </h1>
        <span class="post-date text-muted"> {{$post->updated_at->diffForHumans()}} by </span>
        <a href="" class="profile"> {{$post->user->name}}</a>
        
        <br>
        <p>
        	<pre class="post-body">{{$post->body}}</pre>
        </p>
    </div>
</div>

@endsection