<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games_students')->insert([
            'game_id' => 1,
            'student_id' => 2,
        ]);

        DB::table('games_students')->insert([
            'game_id' => 2,
            'student_id' => 3,
        ]);

        DB::table('games_students')->insert([
            'game_id' => 3,
            'student_id' => 4,
        ]);

        DB::table('games_students')->insert([
            'game_id' => 1,
            'student_id' => 4,
        ]);

        DB::table('games_students')->insert([
            'game_id' => 2,
            'student_id' => 4,
        ]);

        DB::table('games_students')->insert([
            'game_id' => 3,
            'student_id' => 2,
        ]);
    }
}
