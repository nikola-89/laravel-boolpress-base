@extends('layouts.layout')

@section('main')
<div class="container mt-5">
	<div class="row">
		<div class="col-xl-12">
			<div class="home-btn">
				<a href="{{route('post.index')}}"><button class="btn btn-secondary btn-lg btn-block">Homepage</button></a>
			</div>
		</div>
	</div>
</div>
<div class="container mt-5">
	<div class="row">
		<div class="col-xl-12">
			<div class="post">
				<div class="card">
					<img class="card-img-top" src="{{$post->cover}}" alt="{{$post->title}}">
					<div class="card-body">
						<h5 class="card-title">{{$post->title}}</h5>
						<p class="card-text">{{$post->body}}</p>
						<p class="card-text">Fonte: <a href="{{$post->source}}">{{$post->source}}</a></p>
					</div>
					<div class="card-footer text-muted">
						<p class="card-text">{{$post->user->name}} in {{$post->category}} il {{$post->created_at}}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection