<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->truncate();
        // for ($x = 0; $x < 15; $x++) {
        //     $user_id = array_rand(App\User::all()->pluck('id')->toArray(),1)+1;
        //     if (empty(App\User::find($user_id)->posts()->pluck('id')->toArray())) continue;
        //     App\Comment::firstOrCreate([
        //         'content' => str_random(7),
        //         'user_id' => $user_id,
        //         'post_id' => array_rand(App\User::find($user_id)->posts()->pluck('id')->toArray(),1)+1,
        //         'time' => $this->randomDate(),
        //     ]);
        // }


        App\Comment::create([
            'content' => 'ahihi',
            'user_id' => 1,
            'post_id' => 1,
            'time' => $this->randomDate(),
        ]);
        App\Comment::create([
            'content' => 'vui qua',
            'user_id' => 1,
            'post_id' => 3,
            'time' => $this->randomDate(),
        ]);
        App\Comment::create([
            'content' => 'nham nhi that',
            'user_id' => 4,
            'post_id' => 2,
            'time' => $this->randomDate(),
        ]);
        App\Comment::create([
            'content' => 'hay lam ban',
            'user_id' => 2,
            'post_id' => 1,
            'time' => $this->randomDate(),
        ]);
        App\Comment::create([
            'content' => 'vui',
            'user_id' => 1,
            'post_id' => 5,
            'time' => $this->randomDate(),
        ]);
    }
    function randomDate()
    {
        $min = strtotime('2012-01-01 00:00:00');
        $max = strtotime('2018-12-31 23:59:59');
        $rand_date = rand($min, $max);
        return date('Y-m-d H:i:s', $rand_date);
    }
}
