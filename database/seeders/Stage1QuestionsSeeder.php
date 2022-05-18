<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stage1QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage1_questions')->insert(
           [
               'question' => 'Город',
               'type' => 1,
               'topic' => 'A',
               'active' => 1
           ]
        );

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Хобби',
                'type' => 2,
                'topic' => 'C',
                'active' => 1
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

        DB::table('stage1_answers_questions')->insert([
          [
              'question_id' => 2,
              'answer_id' => 1
          ],
          [
              'question_id' => 2,
              'answer_id' => 2
          ],
          [
              'question_id' => 2,
              'answer_id' => 3
          ],
          [
              'question_id' => 2,
              'answer_id' => 4
          ],
          [
              'question_id' => 2,
              'answer_id' => 5
          ]
      ]);

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Интроверт / Экстраверт',
                'type' => 3,
                'topic' => 'B',
                'active' => 1
            ]
        );

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
                  'question_id' => 3,
                  'answer_id' => 6
              ],
              [
                  'question_id' => 3,
                  'answer_id' => 7
              ]
          ]);

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Имя',
                'type' => 1,
                'topic' => 'A',
                'active' => 1
            ]
        );

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Пол',
                'type' => 1,
                'topic' => 'A',
                'active' => 1
            ]
        );

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Возраст',
                'type' => 1,
                'topic' => 'A',
                'active' => 1
            ]
        );
    }
}
