@extends('layouts.layout')

@section('main')
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				@foreach ($posts as $post)
				<div class="post m-5">
					<div class="card">
						<img class="card-img-top" src="{{$post->img}}" alt="{{$post->title}}">
						<div class="card-body">
							<h5 class="card-title">{{$post->title}}</h5>
							<p class="card-text">{{$post->text}}</p>
							<p class="card-text">Fonte: <a href="{{$post->original_source}}">{{$post->original_source}}</a></p>
						</div>
						<div class="card-footer text-muted">
							<p class="card-text">{{$post->author}} in {{$post->category}} il {{$post->created_at}}</p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection