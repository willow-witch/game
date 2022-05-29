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

    public function getGroupInformation($studentId, $gameId)
    {
        $result = DB::table('student_groups')
            ->select(DB::raw(
                'student_groups.group_id',
                'groups.name'))
            ->leftJoin('groups', 'student_groups.group_id', 'groups.id')
            ->leftJoin('games_groups', 'student_groups.group_id', 'games_groups.group_id')
            ->where('student_groups.student_id', '=', $studentId)
            ->where('games_groups.game_id', '=', $gameId)
            ->get();

        return json_decode(json_encode($result, true), true)[0];
    }

    public function getAllFields()
    {
        return [
            "field 1",
            "field 2",
            "field 3",
            "field 4",
            "field 5",
            "field 6"
        ];
    }

    public function getStudentFromField()
    {
        return [
            "student 1",
            "student 2",
            "student 3",
            "student 4",
            "student 5",
            "student 6",
            "student 7",
            "student 8",
            "student 9",
            "student 10"
        ];
    }
}
