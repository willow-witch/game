<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class AdminService
{
    public function getUserInformation($userId)
    {
        $result = DB::table('users')
                ->select(DB::raw(
                        'users.email as "e-mail",
                        admins.first_name as "Имя",
                        admins.last_name as "Фамилия",
                        roles.rus_role as "Роль"
                        '))
                ->leftJoin('admins', 'users.id', 'admins.id')
                ->leftJoin('roles', 'users.role_id', 'roles.id')
                ->where('users.id', 'like', $userId)
                ->get();

        return json_decode(json_encode($result, true), true)[0];
    }
}
