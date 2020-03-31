<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Mmo\Faker\PicsumProvider as FakerImg;
use App\Post;
use App\User;
	class PostsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @param Faker $faker
	 * @param FakerImg $fakerImg
	 * @return void
	 */
	public function run(Faker $faker, FakerImg $fakerImg) {
		$users = User::all();
		foreach ($users as $user) {
			for ($i = 0; $i < 5; $i++) {
				$title = $faker->sentence;
				$newPost = new Post();
				$newPost->user_id = $user->id;
				$newPost->title = $title;
				$newPost->body = $faker->text(1000);
				$newPost->category = $faker->word;
				$newPost->source = $faker->url;
				$newPost->cover = $fakerImg->picsumUrl(1920, 1080);
				$newPost->slug = Str::slug($title);
				$newPost->save();
			}
		}
	}
}
