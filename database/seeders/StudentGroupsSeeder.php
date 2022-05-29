<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentGroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('student_groups')->insert([
            'student_id' => 2,
            'group_id' => 1,
        ]);

        DB::table('student_groups')->insert([
            'student_id' => 3,
            'group_id' => 1,
        ]);

        DB::table('student_groups')->insert([
            'student_id' => 4,
            'group_id' => 2,
        ]);

    }
}
