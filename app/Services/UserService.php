<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class UserService
{

    public function getUserName(): string
    {
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
}
