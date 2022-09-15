<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dataUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Riddle'],
            ['name' => 'Hugh'],
            ['name' => 'Kusa'],
            ['name' => 'Bob'],
            ['name' => 'Eagle'],
            ['name' => 'Neko']
        ]);
    }
}
