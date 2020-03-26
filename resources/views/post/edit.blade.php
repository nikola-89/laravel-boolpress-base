@extends('layouts.layout')

@section('main')
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				@if ($errors->any())
					<div class="alert alert-danger mt-5">
						<ul>
						@foreach ($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
						</ul>
					</div>
				@endif
				<div class="post mt-5">
					<form class="" action="{{route("post.update", $post)}}" method="post">
						@csrf
						@method('PATCH')
						<div class="info-area">
							<input type="text" name="title" value="{{$post->title}}" placeholder="title">
							<input type="text" name="author" value="{{$post->author}}" placeholder="author">
							<input type="text" name="category" value="{{$post->category}}" placeholder="category">
							<input type="text" name="original_source" value="{{$post->original_source}}" placeholder="original_source">
							<input type="text" name="img" value="{{$post->img}}" placeholder="img_url">
						</div>
						<div class="text-area">
							<textarea type="text" name="text" placeholder="text">{{$post->text}}</textarea>
						</div>
						<button type="submit">Modifica</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection