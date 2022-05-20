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
