<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DefaultSeeder::class,
            Stage1QuestionsSeeder::class,
            Stage1AnswersSeeder::class,
            Stage2QuestionsSeeder::class,
            UserSeeder::class,
            GroupsSeeder::class,
            GamesSeeder::class,
            StudentGroupsSeeder::class,
            GamesGroupsSeeder::class,
            GamesStudentsSeeder::class,
            //Stage1AnswersStudentsSeeder::class,
            Stage2AnswersSeeder::class,
            Stage1CriteriaSeeder::class
        ]);
    }
}
