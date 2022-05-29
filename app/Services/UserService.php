<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class UserService
{

    public function voidResponse(): void
    {
        return;
    }

    public function getUserName($userId, $roleId): string
    {
        switch ($roleId)
        {
            case 1:
                return DB::table('admins')
                            ->select(DB::raw(
                            'concat(last_name," ",first_name) as "name"'))
                            ->where('id', '=', $userId)
                            ->value("name");
            case 2:
                return DB::table('students')
                         ->select(DB::raw(
                             'concat(last_name," ",first_name) as "name"'))
                         ->where('id', '=', $userId)
                         ->value("name");
            case 3:
                return DB::table('teachers')
                         ->select(DB::raw(
                             'concat(last_name," ",first_name) as "name"'))
                         ->where('id', '=', $userId)
                         ->value("name");
        }

        return "Фамилия Имя";
    }

    public function getRoles()
    {
        return DB::table('roles')->pluck('rus_role');
    }



    public function getRoleIdFromRusRole($rusRole)
    {
        return DB::table('roles')->where('rus_role', 'like', $rusRole)
                                 ->value('id');
    }

    public function getRoleIdByEmail($email)
    {
        return DB::table('users')->where('email', 'like', $email)
                 ->value('role_id');
    }

    public function getUserIdByEmail($email)
    {
        return DB::table('users')->where('email', 'like', $email)
                 ->value('id');
    }
}
