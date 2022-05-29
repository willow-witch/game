<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'role_id' => '1',
        ]);

        DB::table('admins')->insert([
            'id' => 1,
            'first_name' => 'ИмяАдмина',
            'last_name' => 'ФамилияАдмина',
            'photo' => '/img/profilepics/queen.png'
        ]);

        DB::table('users')->insert([
            'email' => 'student1@gmail.com',
            'password' => Hash::make('student'),
            'role_id' => '2',
        ]);

        DB::table('students')->insert([
            'id' => 2,
            'first_name' => 'ИмяСтудента',
            'last_name' => 'ФамилияСтудента',
            'photo' => '/img/profilepics/queen.png',
            'year' => 1,
            'field' => 'НаправлениеСтудента'
        ]);

        DB::table('users')->insert([
            'email' => 'student2@gmail.com',
            'password' => Hash::make('student'),
            'role_id' => '2',
        ]);

        DB::table('students')->insert([
            'id' => 3,
            'first_name' => 'Валерия',
            'last_name' => 'ФамилияСтудента',
            'photo' => '/img/profilepics/queen.png',
            'year' => 1,
            'field' => 'НаправлениеСтудента'
        ]);

        DB::table('users')->insert([
            'email' => 'student3@gmail.com',
            'password' => Hash::make('student'),
            'role_id' => '2',
        ]);

        DB::table('students')->insert([
            'id' => 4,
            'first_name' => 'Варвара',
            'last_name' => 'ФамилияСтудента',
            'photo' => '/img/profilepics/queen.png',
            'year' => 1,
            'field' => 'НаправлениеСтудента'
        ]);



        DB::table('users')->insert([
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('teacher'),
            'role_id' => '3',
        ]);

        DB::table('teachers')->insert([
            'id' => 5,
            'first_name' => 'ИмяПреподавателя',
            'last_name' => 'ФамилияПреподавателя',
            'photo' => '/img/profilepics/queen.png'
        ]);
    }

}
