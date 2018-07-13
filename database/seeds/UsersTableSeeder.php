<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        App\User::create([
        	'name' => 'Danh'.str_random(3),
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ],
        [
        	'name' => 'Danh',
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        App\User::create([
        	'name' => '123Danh'.str_random(3),
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
        	'name' => 'Danh',
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
        	'name' => 'Danh'.str_random(3),
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
        	'name' => 'Danh'.str_random(3),
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
        	'name' => 'Danh',
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
        	'name' => 'Danh'.str_random(3),
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
        	'name' => 'Danh'.str_random(3),
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
        DB::table('users')->insert([
        	'name' => 'Danh',
        	'email' =>str_random(3).'@gmail.com',
        	'password' => bcrypt('12345678')
        ]);

    }
}
