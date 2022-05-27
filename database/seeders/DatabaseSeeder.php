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
            Stage2QuestionsSeeder::class,
            UserSeeder::class,
            GroupsSeeder::class,
            GamesSeeder::class,
            Stage2AnswersSeeder::class
        ]);
    }
}
