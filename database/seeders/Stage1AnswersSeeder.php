<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stage1AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage1_answers')->insert(
            [
                'answer'=>'Калининград',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'Ольга',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'21',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'Новосибирск',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'Александра',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'22',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'женский',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert([
            [
                'answer' => 'Рисование',
                'active' => 1
            ],
            [
                'answer' => 'Плавание',
                'active' => 1
            ],
            [
                'answer' => 'Писательство',
                'active' => 1
            ],
            [
                'answer' => 'Гейминг',
                'active' => 1
            ],
            [
                'answer' => 'Катание на скейте',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers')->insert([
            [
                'answer' => 'Интроверт',
                'active' => 1
            ],
            [
                'answer' => 'Экстраверт',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 2,
                  'answer_id' => 8
              ],
              [
                  'question_id' => 2,
                  'answer_id' => 9
              ],
              [
                  'question_id' => 2,
                  'answer_id' => 10
              ],
              [
                  'question_id' => 2,
                  'answer_id' => 11
              ],
              [
                  'question_id' => 2,
                  'answer_id' => 12
              ]
          ]);

        DB::table('stage1_answers_questions')->insert([
          [
              'question_id' => 3,
              'answer_id' => 13
          ],
          [
              'question_id' => 3,
              'answer_id' => 14
          ]
      ]);

    }
}
