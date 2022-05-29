<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Stage1CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stage1_criteria')->insert([
            [
                'criteria' => 'Качество анализа',
                'max_point' => 10,
                'active' => 1
            ],
            [
                'criteria' => 'Последовательность стратегии',
                'max_point' => 10,
                'active' => 1
            ],
            [
                'criteria' => 'Освоение концепции таргетинга',
                'max_point' => 10,
                'active' => 1
            ]
        ]);
    }
}
