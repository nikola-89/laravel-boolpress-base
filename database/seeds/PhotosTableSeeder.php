<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Mmo\Faker\PicsumProvider as FakerImg;
use App\Photo;
use App\User;

class PhotosTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @param Faker $faker
	 * @param FakerImg $fakerImg
	 * @return void
	 */
    public function run(Faker $faker, FakerImg $fakerImg)
    {
		$users = User::all();
		foreach ($users as $user) {
			foreach ($user->posts as $userPost) {
				$newPhoto = new Photo;
				$newPhoto->url = $fakerImg->picsumUrl(1920, 1080);
				$newPhoto->title = $faker->sentence;
				$newPhoto->user_id = $user->id;
				$newPhoto->post_id = $userPost->id;
				$newPhoto->save();
			}
    	}
	}
}
