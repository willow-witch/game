<?php

namespace App\Services;

class StudentService
{
    public function getUserInformation(): array
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
                "key" => "Отчество",
                "value" => "Андреевна"
            ],
            [
                "key" =>"Курс, Специальность",
                "value" => "4 курс, МОиАИС"
            ],
            [
                "key" => "e-mail",
                "value" => "abc@gmsil.com"
            ]
        ];
    }
}
