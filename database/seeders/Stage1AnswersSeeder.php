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
                'answer'=>'не замужем/не женат',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'замужем/женат',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'деревня',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'небольшой город',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'большой город',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'мегаполис',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'Футбол',
                'active'=>1
            ],
            [
                'answer' => 'Плавание',
                'active' => 1
            ],
            [
                'answer' => 'Рисование',
                'active' => 1
            ],
            [
                'answer' => 'Серфинг',
                'active' => 1
            ],
            [
                'answer' => 'Скалолазание',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers')->insert([
            [
                'answer' => 'Аккуратность',
                'active' => 1
            ],
            [
                'answer' => 'Эстетика',
                'active' => 1
            ],
            [
                'answer' => 'Креативность',
                'active' => 1
            ],
            [
                'answer' => 'Оригинальность',
                'active' => 1
            ],
            [
                'answer' => 'Опрятность',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 6,
                  'answer_id' => 12
              ],
              [
                  'question_id' => 6,
                  'answer_id' => 13
              ],
              [
                  'question_id' => 6,
                  'answer_id' => 14
              ],
              [
                  'question_id' => 6,
                  'answer_id' => 15
              ],
              [
                  'question_id' => 6,
                  'answer_id' => 16
              ]
          ]);

        DB::table('stage1_answers_questions')->insert([
          [
              'question_id' => 5,
              'answer_id' => 7
          ],
          [
              'question_id' => 5,
              'answer_id' => 8
          ],
          [
              'question_id' => 5,
              'answer_id' => 9
          ],
          [
              'question_id' => 5,
              'answer_id' => 10
          ],
          [
              'question_id' => 5,
              'answer_id' => 11
          ]
      ]);

        DB::table('stage1_answers_questions')->insert([
          [
              'question_id' => 3,
              'answer_id' => 1
          ],
          [
              'question_id' => 3,
              'answer_id' => 2
          ]
      ]);

        DB::table('stage1_answers_questions')->insert([
          [
              'question_id' => 4,
              'answer_id' => 3
          ],
          [
              'question_id' => 4,
              'answer_id' => 4
          ],
          [
              'question_id' => 4,
              'answer_id' => 5
          ],
          [
              'question_id' => 4,
              'answer_id' => 6
          ]
      ]);

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'женский',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'мужской',
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
                'answer'=>'35',
                'active'=>1
            ]
        );


    }
}
