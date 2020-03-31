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
					<form class="" action="{{route("post.store")}}" method="post">
						@csrf
						@method('POST')
						<div class="info-area">
							<input type="text" name="title" value="" placeholder="title">
							<input type="text" name="author" value="" placeholder="author">
							<input type="text" name="category" value="" placeholder="category">
							<input type="text" name="source" value="" placeholder="source - opzionale">
							<input type="text" name="cover" value="" placeholder="cover">
						</div>
						<div class="text-area">
							<textarea type="text" name="body" value="" placeholder="body"></textarea>
						</div>
						<button type="submit">Inserisci</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection