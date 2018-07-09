@extends('layouts.app')

@section('content')

            <div class="container" align="center">
                    <h1 style="font-size: 84px; color: #636b6f;">Laradoggy</h1>

                <div class="links">
                    @foreach($tasks as $t)
                        <li>{{ $t->body }} </li>
                    @endforeach
                    <li>1</li>
                </div>
            </div>

@endsection