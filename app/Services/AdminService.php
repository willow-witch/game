<?php

namespace App\Services;

class AdminService
{
    public function getUserInformation()
    {
        return [
            [
                "key" => "Фамилия",
                "value" => "Иванова"
            ],
            [
                "key" =>  "Имя",
                "value" => "Валерия"
            ],
            [
                "key" =>"Роль",
                "value" => "Администратор"
            ],
            [
                "key" => "e-mail",
                "value" => "abc@gmsil.com"
            ]
        ];
    }
}
