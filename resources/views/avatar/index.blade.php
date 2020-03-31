@extends('layouts.layout')

@section('main')
    <div class="container">
        <div class="row">
            @foreach ($avatars as $avatar)
                <div class="col-12">
                    <div class="avatars">
                        <img src="{{$avatar->url}}" alt="">
                        <p>User: {{$avatar->user->name}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection