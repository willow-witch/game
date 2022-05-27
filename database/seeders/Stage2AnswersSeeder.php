<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stage2AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 1,
                'answer'=>'Красивый, модный, молодежный',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 2,
                'answer'=>'Заставить всех радоваться',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 3,
                'answer'=>'У конкурентов скучно',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 4,
                'answer'=>'У нас уровень веселья всегда увеличивается',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 5,
                'answer'=>'У нас люди радуются',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 6,
                'answer'=>'Люди разуются и платят больше денег',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 7,
                'answer'=>'Хорошее настоение у клиентов и сотрудников',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 8,
                'answer'=>'У других меньше радуются и там дороже',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );

        DB::table('stage2_answers_students')->insert(
            [
                'question_id' => 9,
                'answer'=>'Люди радуются и рекомендуют друзьям',
                'game_id' => 1,
                'group_id' => 1,
                'answer_date'=>date('Y-m-d H:i:s'),
                'active'=>1
            ]
        );
    }
}
