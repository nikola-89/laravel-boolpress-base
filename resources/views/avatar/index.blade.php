@extends('layouts.layout')

@section('main')
    <div class="container">
        <div class="row">
            @foreach ($avatars as $avatar)
                <div class="col-12">
                    <img src="{{$avatar->url}}" alt="">
                    <p>User: {{$avatar->user->name}}</p>
                    <a class="btn btn-primary" href="{{route("avatar.show", $avatar)}}">Show</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection