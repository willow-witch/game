<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question_type')->insert([
            [
                'type' => 'free'
            ],
            [
                'type' => 'test-multiple-options'
            ],
            [
               'type' => 'test-only-option'
            ]
        ]);

        DB::table('roles')->insert([
            [
                'role' => 'admin'
            ],
            [
               'role' => 'student'
            ],
            [
               'role' => 'teacher'
            ]
        ]);

        DB::table('stages')->insert([
            [
                'stage' => 'Таргетинг'
            ],
            [
               'stage' => 'Позиционирование'
            ],
            [
               'stage' => 'Стадия 3'
            ],
            [
               'stage' => 'Стадия 4'
            ],
            [
               'stage' => 'Стадия 5'
            ]
        ]);
    }
}
