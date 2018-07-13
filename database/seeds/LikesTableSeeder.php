<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->truncate();
        // for ($x = 0; $x < 10; $x++) {
        //     $user_id = array_rand(App\User::all()->pluck('id')->toArray(),1)+1;
        //     if (empty(App\User::find($user_id)->posts()->pluck('id')->toArray())) continue;
        //     App\Like::firstOrNew([
        //         'user_id' => $user_id,
        //         'post_id' => array_rand(App\User::find($user_id)->posts()->pluck('id')->toArray(),1)+1,
        //         'time' => $this->randomDate(),
        //     ])->save();
        // }

        
        App\Like::create([
            'user_id' => 1,
            'post_id' => 2,
            'time' => $this->randomDate(),
        ]);
        App\Like::create([
            'user_id' => 1,
            'post_id' => 5,
            'time' => $this->randomDate(),
        ]);
        App\Like::create([
            'user_id' => 2,
            'post_id' => 1,
            'time' => $this->randomDate(),
        ]);
        App\Like::create([
            'user_id' => 3,
            'post_id' => 4,
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
