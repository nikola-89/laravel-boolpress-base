<?php

	use Illuminate\Database\Seeder;
	use Faker\Generator as Faker;
	use Illuminate\Support\Facades\Hash;
	use Illuminate\Support\Str;

	class UsersTableSeeder extends Seeder
	{
		/**
		 * Run the database seeds.
		 *
		 * @param Faker $faker
		 * @return void
		 */
		public function run(Faker $faker) {
			for ($i = 0; $i < 5; $i++) {
				$name = $faker->name;
				$newPost = new \App\User();
				$newPost->name = $name;
				$newPost->email = $faker->email;
				$newPost->password = Hash::make('password');
				$newPost->slug = Str::slug($name);
				$newPost->save();
			}
		}
	}
