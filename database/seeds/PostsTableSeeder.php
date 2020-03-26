<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Mmo\Faker\PicsumProvider as FakerImg;
use App\Post;

class PostsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker, FakerImg $fakerImg) {
		for ($i = 0; $i < 10; $i++) {
			$title = $faker->sentence;
			$newPost = new Post();
			$newPost->title = $title;
			$newPost->author = $faker->name;
			$newPost->text = $faker->text(1000);
			$newPost->category = $faker->word;
			$newPost->original_source = $faker->url;
			$newPost->img = $fakerImg->picsumUrl(1920, 1080);
			$newPost->slug = Str::slug($title);
			$newPost->save();
		}
	}
}
