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

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Семейное положение',
                'type' => 3,
                'topic' => 'B',
                'active' => 1
            ]
        );

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Место жительства',
                'type' => 3,
                'topic' => 'B',
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

        DB::table('stage1_questions')->insert(
            [
                'question' => 'Ценности',
                'type' => 2,
                'topic' => 'C',
                'active' => 1
            ]
        );



    }
}
