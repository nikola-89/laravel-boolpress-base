<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
	private $validationPost = [
		"title" => "string|required",
		"author" => "string|required",
		"text" => "string|required",
		"category" => "string|required|max:50",
		"original_source" => "nullable|string",
		"img" => "string|required"
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$posts = Post::all();
		return view('post.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view("post.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate($this->validationPost);
		$data = $request->all();
		$post = new Post;
		$post->fill($data);
		$post->slug = Str::slug($data['title']);
		$saved = $post->save();
		if ($saved) {
			return redirect()->route("post.show", $post);
		}
		abort('404');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Post $post)
	{
		return view('post.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Post $post)
	{
		return view('post.edit', compact('post'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Post $post)
	{
		$request->validate($this->validationPost);
		$data = $request->all();
		$post->fill($data);
		$updated = $post->update();
		if ($updated) {
			return redirect()->route('post.show', $post);
		}
		abort('404');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Post $post)
	{
		if (empty($post)) {
		abort('404');
		}
		$id = $post->id;
		$post->delete();
		return redirect()->route('post.index')->with('successDelete', $id);
	}
}
