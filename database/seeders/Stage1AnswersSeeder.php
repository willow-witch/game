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

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 12,
                  'answer_id' => 1
              ],
              [
                  'question_id' =>12,
                  'answer_id' => 2
              ]
          ]);
        DB::table('stage1_answers')->insert(
            [
                'answer'=>'мужской',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'женский',
                'active'=>1
            ]
        );

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 11,
                  'answer_id' => 3
              ],
              [
                  'question_id' =>11,
                  'answer_id' => 4
              ]
          ]);

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'деревня (<100 тыс)',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'небольшой город (100 тыс-1 млн)',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'большой город (1 млн-3 млн)',
                'active'=>1
            ]
        );

        DB::table('stage1_answers')->insert(
            [
                'answer'=>'мегаполис (>3 млн)',
                'active'=>1
            ]
        );

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 14,
                  'answer_id' => 5
              ],
              [
                  'question_id' => 14,
                  'answer_id' => 6
              ],
              [
                  'question_id' => 14,
                  'answer_id' => 7
              ],
              [
                  'question_id' => 14,
                  'answer_id' => 8
              ]
          ]);

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

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 23,
                  'answer_id' => 9
              ],
              [
                  'question_id' => 23,
                  'answer_id' => 10
              ],
              [
                  'question_id' => 23,
                  'answer_id' => 11
              ],
              [
                  'question_id' => 23,
                  'answer_id' => 12
              ],
              [
                  'question_id' => 23,
                  'answer_id' => 13
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
                  'question_id' => 26,
                  'answer_id' => 14
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 15
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 16
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 17
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 18
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'1 человек',
                'active'=>1
            ],
            [
                'answer' => '2 человека',
                'active' => 1
            ],
            [
                'answer' => '3 человека',
                'active' => 1
            ],
            [
                'answer' => '4 человека',
                'active' => 1
            ],
            [
                'answer' => 'более 5 человек',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 13,
                  'answer_id' => 19
              ],
              [
                  'question_id' => 13,
                  'answer_id' => 20
              ],
              [
                  'question_id' => 13,
                  'answer_id' => 21
              ],
              [
                  'question_id' => 13,
                  'answer_id' => 22
              ],
              [
                  'question_id' => 13,
                  'answer_id' => 23
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'временная неполная занятость',
                'active'=>1
            ],
            [
                'answer' => 'постоянная занятость',
                'active' => 1
            ],
            [
                'answer' => 'неполная занятость',
                'active' => 1
            ],
            [
                'answer' => 'нерегулярная занятость',
                'active' => 1
            ],
            [
                'answer' => 'частичная занятость',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
          [
              'question_id' => 15,
              'answer_id' => 24
          ],
          [
              'question_id' => 15,
              'answer_id' => 25
          ],
          [
              'question_id' => 15,
              'answer_id' => 26
          ],
          [
              'question_id' => 15,
              'answer_id' => 27
          ],
          [
              'question_id' => 15,
              'answer_id' => 28
          ]
      ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'низкий (<40 тыс руб/мес)',
                'active'=>1
            ],
            [
                'answer' => 'средний (40-100 тыс руб/мес)',
                'active' => 1
            ],
            [
                'answer' => 'высокий (>100 тыс руб/мес)',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 16,
                  'answer_id' => 29
              ],
              [
                  'question_id' => 16,
                  'answer_id' => 30
              ],
              [
                  'question_id' => 16,
                  'answer_id' => 31
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'знакомые',
                'active'=>1
            ],
            [
                'answer' => 'социальные сети',
                'active' => 1
            ],
            [
                'answer' => 'телевидение',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 17,
                  'answer_id' => 32
              ],
              [
                  'question_id' => 17,
                  'answer_id' => 33
              ],
              [
                  'question_id' => 17,
                  'answer_id' => 34
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'активный',
                'active'=>1
            ],
            [
                'answer' => 'подвижный',
                'active' => 1
            ],
            [
                'answer' => 'сидячий',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 18,
                  'answer_id' => 35
              ],
              [
                  'question_id' => 18,
                  'answer_id' => 36
              ],
              [
                  'question_id' => 18,
                  'answer_id' => 37
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'среднее',
                'active'=>1
            ],
            [
                'answer' => 'высшее',
                'active' => 1
            ],
            [
                'answer' => 'ученая степень',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 19,
                  'answer_id' => 38
              ],
              [
                  'question_id' => 19,
                  'answer_id' => 39
              ],
              [
                  'question_id' => 19,
                  'answer_id' => 40
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'младший сотрудник',
                'active'=>1
            ],
            [
                'answer' => 'старший сотрудник',
                'active' => 1
            ],
            [
                'answer' => 'ведущий сотрудник',
                'active' => 1
            ],
            [
                'answer' => 'главный сотрудник',
                'active' => 1
            ],
            [
                'answer' => 'высший сотрудник',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 20,
                  'answer_id' => 41
              ],
              [
                  'question_id' => 20,
                  'answer_id' => 42
              ],
              [
                  'question_id' => 20,
                  'answer_id' => 43
              ],
              [
                  'question_id' => 20,
                  'answer_id' => 44
              ],
              [
                  'question_id' => 20,
                  'answer_id' => 45
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'малая (до 100 работников)',
                'active'=>1
            ],
            [
                'answer' => 'средняя (100–500 работников)',
                'active' => 1
            ],
            [
                'answer' => 'крупная (более 500 сотрудников)',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 21,
                  'answer_id' => 46
              ],
              [
                  'question_id' => 21,
                  'answer_id' => 47
              ],
              [
                  'question_id' => 21,
                  'answer_id' => 48
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'лично',
                'active'=>1
            ],
            [
                'answer' => 'социальные сети',
                'active' => 1
            ],
            [
                'answer' => 'мессенджеры',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 22,
                  'answer_id' => 49
              ],
              [
                  'question_id' => 22,
                  'answer_id' => 50
              ],
              [
                  'question_id' => 22,
                  'answer_id' => 51
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'моральное удовлетворение',
                'active'=>1
            ],
            [
                'answer' => 'деньги',
                'active' => 1
            ],
            [
                'answer' => 'возможность творчества',
                'active' => 1
            ],
            [
                'answer' => 'возможность руководить',
                'active' => 1
            ],
            [
                'answer' => 'самостоятельность',
                'active' => 1
            ],
            [
                'answer' => 'саморазвитие',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 24,
                  'answer_id' => 52
              ],
              [
                  'question_id' => 24,
                  'answer_id' => 53
              ],
              [
                  'question_id' => 24,
                  'answer_id' => 54
              ],
              [
                  'question_id' => 24,
                  'answer_id' => 55
              ],
              [
                  'question_id' => 24,
                  'answer_id' => 56
              ],
              [
                  'question_id' => 24,
                  'answer_id' => 57
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'материальное благополучие',
                'active'=>1
            ],
            [
                'answer' => 'семья',
                'active' => 1
            ],
            [
                'answer' => 'власть',
                'active' => 1
            ],
            [
                'answer' => 'служение',
                'active' => 1
            ],
            [
                'answer' => 'помощь другим людям',
                'active' => 1
            ],
            [
                'answer' => 'дружба',
                'active' => 1
            ],
            [
                'answer' => 'творческое развитие',
                'active' => 1
            ],
            [
                'answer' => 'самостоятельность',
                'active' => 1
            ],
            [
                'answer' => 'интеллектуальное развитие',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 25,
                  'answer_id' => 58
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 59
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 60
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 61
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 62
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 63
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 64
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 65
              ],
              [
                  'question_id' => 25,
                  'answer_id' => 66
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer'=>'друзья',
                'active'=>1
            ],
            [
                'answer' => 'инфлюэнсеры',
                'active' => 1
            ],
            [
                'answer' => 'кумиры',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 27,
                  'answer_id' => 67
              ],
              [
                  'question_id' => 27,
                  'answer_id' => 68
              ],
              [
                  'question_id' => 27,
                  'answer_id' => 69
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer' => 'интернет-магазины',
                'active' => 1
            ],
            [
                'answer' => 'маленькие магазины',
                'active' => 1
            ],
            [
                'answer' => 'торговые центры',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 28,
                  'answer_id' => 70
              ],
              [
                  'question_id' => 28,
                  'answer_id' => 71
              ],
              [
                  'question_id' => 28,
                  'answer_id' => 72
              ]
          ]);

        DB::table('stage1_answers')->insert([
            [
                'answer' => 'Доступность',
                'active' => 1
            ],
            [
                'answer' => 'Достижения',
                'active' => 1
            ],
            [
                'answer' => 'Активность',
                'active' => 1
            ],
            [
                'answer' => 'Приключения',
                'active' => 1
            ],
            [
                'answer' => 'Гибкость',
                'active' => 1
            ],
            [
                'answer' => 'Любопытство',
                'active' => 1
            ],
            [
                'answer' => 'Смелость',
                'active' => 1
            ],
            [
                'answer' => 'Решительность',
                'active' => 1
            ],
            [
                'answer' => 'Достоинство',
                'active' => 1
            ],
            [
                'answer' => 'Честность',
                'active' => 1
            ],
            [
                'answer' => 'Свобода',
                'active' => 1
            ],
            [
                'answer' => 'Дружелюбие',
                'active' => 1
            ],
            [
                'answer' => 'Веселье',
                'active' => 1
            ],
            [
                'answer' => 'Щедрость',
                'active' => 1
            ],
            [
                'answer' => 'Оптимизм',
                'active' => 1
            ]
        ]);

        DB::table('stage1_answers_questions')->insert([
              [
                  'question_id' => 26,
                  'answer_id' => 73
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 74
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 75
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 76
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 77
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 78
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 79
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 80
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 81
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 82
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 83
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 84
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 85
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 86
              ],
              [
                  'question_id' => 26,
                  'answer_id' => 87
              ]
        ]);

    }
}
