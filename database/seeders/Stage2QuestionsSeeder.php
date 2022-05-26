<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stage2QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage2_questions')->insert(
            [
                'question' => 'Описание товара',
                'question_help'=>'Добавьте описание для товара:',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Миссия бренда',
                'question_help'=>'Опишите миссию бренда:',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Отличия от конкурентов',
                'question_help'=>'(Стиль/материал/дополнительные услуги/кредит/доставка/способ продажи)',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Подкрепление отличий',
                'question_help'=>'(борьба с контрафактами и т.д.)',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Взаимодействие с клиентами',
                'question_help'=>'Опишите примеры взаимодействия с клиентами',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Business - бизнес',
                'question_help'=>'Каким бизнесом вы оперируете с точки зрения клиента (отражает ли это позиционирование?)',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Benefit - выгода',
                'question_help'=>'Утверждает ли позиционирование первостепенные выгоды, предполагаемые потребителю (совпадает ли это с пониманием компании?)',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Better - превосходство',
                'question_help'=>'Сообщает ли позиционирование, почему предложение организации лучше других? Доходит ли эта информация до потребителя?',
                'type' => 1,
                'active' => 1
            ]
        );

        DB::table('stage2_questions')->insert(
            [
                'question' => 'Brand - Бренд',
                'question_help'=>'Улучшает ли позиционирование имидж бренда в целом?',
                'type' => 1,
                'active' => 1
            ]
        );
    }
}
