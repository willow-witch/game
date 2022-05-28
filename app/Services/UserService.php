<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class UserService
{

    public function voidResponse(): void
    {
        return;
    }

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

    public function getRoleIdByEmail($email)
    {
        return DB::table('users')->where('email', 'like', $email)
                 ->value('role_id');
    }
}
