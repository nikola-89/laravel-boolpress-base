@extends('layouts.layout')

@section('main')
    <div class="container">
        <div class="row">
            @foreach ($photos as $photo)
                <div class="col-12">
                    <div class="photo">
                        <img class="img-fluid" src="{{$photo->url}}" alt="">
                        <p>{{$photo->title}}</p>
                        <p>User ID: {{$photo->user_id}}</p>
                        <p>Post ID: {{$photo->post_id}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection