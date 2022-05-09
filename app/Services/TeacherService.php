<?php

namespace App\Services;

class TeacherService
{
    public function getUserInformation()
    {
        return [
            [
                "key" => "Фамилия",
                "value" => "Зонин"
            ],
            [
                "key" =>  "Имя",
                "value" => "Никита"
            ],
            [
                "key" => "Отчество",
                "value" => "Андреевич"
            ],
            [
                "key" =>"Должность",
                "value" => "Преподаватель"
            ],
            [
                "key" => "e-mail",
                "value" => "abc@gmsil.com"
            ]
        ];
    }
}
