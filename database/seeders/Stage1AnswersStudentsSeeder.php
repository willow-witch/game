<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stage1AnswersStudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage1_answers_students')->insert(
            [
                'question_id' => 1,
                'answer_id'=> 18,
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage1_answers_students')->insert(
            [
                'question_id' => 2,
                'answer_id'=> 19,
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage1_answers_students')->insert(
            [
                'question_id' => 3,
                'answer_id'=> 1,
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage1_answers_students')->insert(
            [
                'question_id' => 4,
                'answer_id'=> 5,
                'game_id' => 1,
                'group_id' => 2,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage1_answers_students')->insert(
            [
                [
                    'question_id' => 5,
                    'answer_id'=> 8,
                    'game_id' => 1,
                    'group_id' => 1,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=>1
                ],
                [
                    'question_id' => 5,
                    'answer_id'=> 10,
                    'game_id' => 1,
                    'group_id' => 1,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=>1
                ],
                [
                    'question_id' => 5,
                    'answer_id'=> 11,
                    'game_id' => 1,
                    'group_id' => 1,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=>1
                ]
            ]);

        DB::table('stage1_answers_students')->insert(
            [
                [
                    'question_id' => 6,
                    'answer_id'=> 13,
                    'game_id' => 1,
                    'group_id' => 1,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=> 1
                ],
                [
                    'question_id' => 6,
                    'answer_id'=> 14,
                    'game_id' => 1,
                    'group_id' => 1,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=>1
                ],
                [
                    'question_id' => 6,
                    'answer_id'=> 12,
                    'game_id' => 1,
                    'group_id' => 1,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=>1
                ],
                [
                    'question_id' => 6,
                    'answer_id'=> 16,
                    'game_id' => 1,
                    'group_id' => 1,
                    'answer_date'=>date('Y-m-d H:i:s'),
                    'active'=> 1
                ]
            ]);
    }
}
