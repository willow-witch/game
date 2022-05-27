<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert(
            [
                'start_date'=>date('Y-m-d H:i:s'),
                'end_date'=>date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)), //следующая неделя
                'teams_amount' => 5,
                'password'=>123456
            ]
        );

        DB::table('games')->insert(
            [
                'start_date'=>date('Y-m-d H:i:s'),
                'end_date'=>date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)),
                'teams_amount' => 5,
                'password'=>123456
            ]
        );

        DB::table('games')->insert(
            [
                'start_date'=>date('Y-m-d H:i:s'),
                'end_date'=>date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)),
                'teams_amount' => 5,
                'password'=>123456
            ]
        );
    }
}
