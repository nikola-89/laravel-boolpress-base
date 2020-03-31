<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Avatar;
class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$users = User::all();
		foreach ($users as $user) {
			$newAvatar = new Avatar;
			$newAvatar->url = 'https://i.pravatar.cc/150?img=' . rand(1, 70);
			$newAvatar->user_id = $user->id;
			$newAvatar->save();
		}
    }
}
