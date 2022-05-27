<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert(
            [
                'name' => 'Смешарики',
                'start_date'=>date('Y-m-d H:i:s'),
                'end_date'=>date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)),
                'participants_number' => 5,
            ]
        );

        DB::table('groups')->insert(
            [
                'name' => 'Снежинки',
                'start_date'=>date('Y-m-d H:i:s'),
                'end_date'=>date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)),
                'participants_number' => 6,
            ]
        );

        DB::table('groups')->insert(
            [
                'name' => 'Ромашки',
                'start_date'=>date('Y-m-d H:i:s'),
                'end_date'=>date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)),
                'participants_number' => 3,
            ]
        );

        DB::table('groups')->insert(
            [
                'name' => 'Цветы',
                'start_date'=>date('Y-m-d H:i:s'),
                'end_date'=>date('Y-m-d H:i:s', time() + (7 * 24 * 60 * 60)),
                'participants_number' => 4,
            ]
        );
    }
}
