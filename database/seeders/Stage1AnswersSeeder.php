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

    }
}
