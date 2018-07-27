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
        <p class="post-body">{{$post->body}}</p>
    </div>
</div>

@endsection