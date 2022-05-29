<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games_groups')->insert([
            'game_id' => 1,
            'group_id' => 1,
        ]);

        DB::table('games_groups')->insert([
            'game_id' => 2,
            'group_id' => 2,
        ]);
    }
}
