@extends('layouts.layout')

@section('main')
@if (session('successDelete'))
<div class="container mt-5">
	<div class="row">
		<div class="col-xl-12">
			<div class="alert alert-success">
				<p>Post con id {{session('successDelete')}} eliminato.</p>
			</div>
		</div>
	</div>
</div>
@endif

<div class="container">
	<div class="row">
		<div class="col-xl-12">
			@foreach ($posts as $post)
			<div class="post mt-5">
				<div class="card">
					<img class="card-img-top" src="{{$post->img}}" alt="{{$post->title}}">
					<div class="card-body">
						<h5 class="card-title">{{$post->title}}</h5>
						<p class="card-text">{{$post->text}}</p>
						<p class="card-text">Fonte: <a href="{{$post->original_source}}">{{$post->original_source}}</a></p>
					</div>
					<div class="card-footer text-muted d-flex justify-content-between align-items-center">
						<p class="card-text m-0">{{$post->author}} in {{$post->category}} il {{$post->created_at}}</p>
						<div class="action-btn d-flex justify-content-between align-items-center">
							<a href="{{route('post.show', $post)}}"><button class="btn btn-success ml-5">Visualizza</button></a>
							<a href="{{route('post.edit', $post)}}"><button class="btn btn-primary ml-5">Modifica</button></a>
							<form action="{{route('post.destroy', $post)}}" method="post">
								@csrf
								@method('DELETE')
								<button class="btn btn-danger ml-5" type="submit">Elimina</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection