<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class StudentService
{
    public function getUserInformation($userId)
    {
        $result = DB::table('users')
                    ->select(DB::raw(
                        'users.email as "e-mail",
                        students.first_name as "Имя",
                        students.last_name as "Фамилия",
                        students.field as "Направление",
                        students.year as "Курс"
                        '))
                    ->leftJoin('students', 'users.id', 'students.id')
                    ->where('users.id', 'like', $userId)
                    ->get();

        return json_decode(json_encode($result, true), true)[0];
    }

    public function getUserPhotoById($userId)
    {
        return DB::table('students')
                    ->select(DB::raw(
                     'students.photo as "photo"'))
                    ->where('id', '=', $userId)
                    ->value("photo");
    }

    public function getStudentIdByName($studentName)
    {
        return DB::table('students')
                 ->select(DB::raw(
                     'id as "student_id",
                     concat(last_name," ",first_name) as "name"'))
                 ->having('name', 'like', $studentName)
                 ->value("student_id");
    }

    public function getGroupInformation($studentId, $gameId)
    {
        $result = DB::table('student_groups')
            ->select(DB::raw(
                'student_groups.group_id,
                groups.name'))
            ->leftJoin('groups', 'student_groups.group_id', 'groups.id')
            ->leftJoin('games_groups', 'student_groups.group_id', 'games_groups.group_id')
            ->where('student_groups.student_id', '=', $studentId)
            ->where('games_groups.game_id', '=', $gameId)
            ->get();

        return json_decode(json_encode($result, true), true)[0];
    }

    public function getAllFields()
    {
        return DB::table('students')
                        ->distinct()
                        ->pluck("field");
    }

    public function getStudentFromField($field)
    {
        return DB::table('students')
                 ->select(DB::raw(
                     'concat(last_name," ",first_name) as "name"'))
                 ->where('field', 'like', $field)
                 ->pluck("name");
    }
}
