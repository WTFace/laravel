@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Wrtie Posts') }}</div>

                <div class="card-body">
                    <form method="POST" action="/post/store">
                        @csrf
                        <input id="user_id" type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-7">
                                <input id="title" type="text" class="form-control" name="title" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="body" class="col-md-3 col-form-label text-md-right">{{ __('blahblah') }}</label>

                            <div class="col-md-7">
                                <textarea name="body" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-3">
                                <button type="submit" class="btn btn-primary col-md-4">
                                    {{ __('Post') }} 
                                </button>
                            </div>
                        </div>

                        @include('layouts.errors')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection