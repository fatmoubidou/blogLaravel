<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$user = [0=>1,1=>2];
        //getting users id
        //$user[]=DB::table('users')->value('id');
        $user = DB::table('users')->pluck('id');
        //
        for ($i=0; $i < 20; $i++) {
          Post::create([
              'title' => 'Post n°'.$i,
              'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
              'user_id' => $user[rand(0, count($user)-1)],
          ]);
        }
    }
}
