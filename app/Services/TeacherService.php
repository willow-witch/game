<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class TeacherService
{
    public function getUserInformation($userId)
    {
        $result = DB::table('users')
                    ->select(DB::raw(
                        'users.email as "e-mail",
                        teachers.first_name as "Имя",
                        teachers.last_name as "Фамилия",
                        roles.rus_role as "Роль"
                        '))
                    ->leftJoin('teachers', 'users.id', 'teachers.id')
                    ->leftJoin('roles', 'users.role_id', 'roles.id')
                    ->where('users.id', 'like', $userId)
                    ->get();

        return json_decode(json_encode($result, true), true)[0];
    }

    public function getUserPhotoById($userId)
    {
        return DB::table('teachers')
                 ->select(DB::raw(
                     'teachers.photo as "photo"'))
                 ->where('id', '=', $userId)
                 ->value("photo");
    }

    public function getJudgesForGameStage($game, $stage)
    {
        return DB::table('judges')
                 ->select(DB::raw(
                     'concat(last_name," ",first_name) as "name"'))
                 ->leftJoin('teachers', 'teachers.id', 'judges.teacher_id')
                 ->where('judges.game_id', '=', $game)
                 ->where('judges.stage_id', '=', $stage)
                 ->pluck("name");
    }

    public function getAllTeachers()
    {
        return DB::table('teachers')
                 ->select(DB::raw(
                     'concat(last_name," ",first_name) as "name"'))
                 ->pluck("name");
    }

    public function getTeacherId($name)
    {
        return DB::table('teachers')
                 ->select(DB::raw(
                     'concat(last_name," ",first_name) as "name",
                     id as "teacher"'))
                 ->having('name', 'like', $name)
                 ->value("teacher");
    }
}
