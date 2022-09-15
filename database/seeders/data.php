<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_game')->insert([
            ['user_id' => 1, 'game_id' => 1, 'score' => 10],
            ['user_id' => 2, 'game_id' => 1, 'score' => 20],
            ['user_id' => 3, 'game_id' => 3, 'score' => 50],
            ['user_id' => 5, 'game_id' => 3, 'score' => 40],
            ['user_id' => 1, 'game_id' => 1, 'score' => 100],
            ['user_id' => 6, 'game_id' => 3, 'score' => 80],
            ['user_id' => 2, 'game_id' => 3, 'score' => 10],
            ['user_id' => 4, 'game_id' => 2, 'score' => 90],
            ['user_id' => 1, 'game_id' => 3, 'score' => 60],
            ['user_id' => 3, 'game_id' => 2, 'score' => 30]
        ]);
    }
}
