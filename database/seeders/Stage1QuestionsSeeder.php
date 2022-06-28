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
                [
                    'question' => 'Изображение',
                    'type' => 1,
                    'topic' => 'X',
                    'active' => 1
                ],
                [
                    'question' => 'Имя',
                    'type' => 1,
                    'topic' => 'A',
                    'active' => 1
                ],
                [
                    'question' => 'Возраст',
                    'type' => 1,
                    'topic' => 'A',
                    'active' => 1
                ],
                [
                    'question' => 'Профессия',
                    'type' => 1,
                    'topic' => 'B',
                    'active' => 1
                ],
                [
                    'question' => 'Сфера работы / учебы',
                    'type' => 1,
                    'topic' => 'B',
                    'active' => 1
                ],[
                    'question' => 'Боли',
                    'type' => 1,
                    'topic' => 'E',
                    'active' => 1
                ],
                [
                    'question' => 'Амбиции',
                    'type' => 1,
                    'topic' => 'E',
                    'active' => 1
                ],[
                    'question' => 'Внешние факторы, влияющие на принятие решения о покупке',
                    'type' => 1,
                    'topic' => 'E',
                    'active' => 1
                ],
                [
                    'question' => 'Внутренние факторы, влияющие на принятие решения о покупке',
                    'type' => 1,
                    'topic' => 'E',
                    'active' => 1
                ],
                [
                    'question' => 'Опасения',
                    'type' => 1,
                    'topic' => 'E',
                    'active' => 1
                ]
            ]
        );

        DB::table('stage1_questions')->insert(
            [
                [
                    'question' => 'Пол',//11
                    'type' => 3,
                    'topic' => 'A',
                    'active' => 1
                ],
                [
                    'question' => 'Семейное положение',
                    'type' => 3,
                    'topic' => 'A',
                    'active' => 1
                ],
                [
                    'question' => 'Размер семьи',
                    'type' => 3,
                    'topic' => 'A',
                    'active' => 1
                ],
                [
                    'question' => 'Место жительства',
                    'type' => 3,
                    'topic' => 'B',
                    'active' => 1
                ],
                [
                    'question' => 'Занятость',
                    'type' => 3,
                    'topic' => 'C',
                    'active' => 1
                ],
                [
                    'question' => 'Доход',
                    'type' => 3,
                    'topic' => 'C',
                    'active' => 1
                ],
                [
                    'question' => 'Как преимущественно получают информацию?',
                    'type' => 3,
                    'topic' => 'D',
                    'active' => 1
                ],
                [
                    'question' => 'Образ жизни',
                    'type' => 3,
                    'topic' => 'D',
                    'active' => 1
                ],
                [
                    'question' => 'Образование',
                    'type' => 3,
                    'topic' => 'C',
                    'active' => 1
                ],
                [
                    'question' => 'Должность',
                    'type' => 3,
                    'topic' => 'C',
                    'active' => 1
                ],
                [
                    'question' => 'Размер компании, на которую работают ',
                    'type' => 3,
                    'topic' => 'C',
                    'active' => 1
                ],
                [
                    'question' => 'Как общаются?',
                    'type' => 3,
                    'topic' => 'D',
                    'active' => 1
                ]
            ]
        );

        DB::table('stage1_questions')->insert(
            [
                [
                    'question' => 'Хобби',//23
                    'type' => 2,
                    'topic' => 'D',
                    'active' => 1
                ],
                [
                    'question' => 'Цели в карьере',
                    'type' => 2,
                    'topic' => 'D',
                    'active' => 1
                ],
                [
                    'question' => 'Цели в жизни',
                    'type' => 2,
                    'topic' => 'D',
                    'active' => 1
                ],
                [
                    'question' => 'Ценности',
                    'type' => 2,
                    'topic' => 'D',
                    'active' => 1
                ],
                [
                    'question' => 'На чье мнение ориентируются?',
                    'type' => 2,
                    'topic' => 'D',
                    'active' => 1
                ],
                [
                    'question' => 'Где совершают покупки?',
                    'type' => 2,
                    'topic' => 'D',
                    'active' => 1
                ]
            ]
        );



    }
}
