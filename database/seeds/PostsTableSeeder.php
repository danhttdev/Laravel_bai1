<?php

use Illuminate\Database\Seeder;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);
        DB::table('posts')->insert([
        	'title' => str_random(3).'AAA',
        	'content' =>str_random(7),
            'user_id' => array_rand(App\User::all()->pluck('id')->toArray()),
            'time' => Date('Y-m-d H:i:s'),
        	'tag' =>'danh@gmail.com',
        ]);                          
    }
}
