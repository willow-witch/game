<?php

namespace App\Services;

class TeamService
{
    public function getTeamName() : string
    {
        return "team1";
    }

    public function getAnswersForStage(int $stage) : array
    {
        switch ($stage){
            case 1:
                return [
                    [
                        "question" => "City",
                        "type" => "free",
                        "answers" => [
                            "City"
                        ]
                    ],
                    [
                        "question" => "Hobbies",
                        "type" => "test-multiple-options",
                        "answers" => [
                            "Skating",
                            "Swimming",
                            "Sketching",
                            "Writing",
                            "Gaming",
                            "Swimming",
                            "Sketching",
                            "Writing",
                            "Gaming"
                        ]
                    ],
                    [
                        "question" => "Personality",
                        "type" => "test-only-option",
                        "answers" => [
                            "Introvert"
                        ]
                    ],
                    [
                        "question" => "Personality",
                        "type" => "test-only-option",
                        "answers" => [
                            "Introvert"
                        ]
                    ],
                    [
                        "question" => "Personality",
                        "type" => "test-only-option",
                        "answers" => [
                            "Introvert"
                        ]
                    ]
                ];
            case 2:
                return [
                  [
                      "question" => "Описание товара",
                      "answers" => [
                          "Красивый",
                          "Красивый",
                          "Красивый",
                          "Красивый",
                          "Красивый"
                      ]
                  ],
                  [
                      "question" => "Миссия бренда",
                      "answers" => [
                          "КрасивыйКрасивыйКрасивыйКрасивыйКрасивый"
                      ]
                  ],
                  [
                      "question" => "Отличие от конкурентов",
                      "answers" => [
                          "Красивый",
                          "Красивый",
                          "Красивый",
                          "Красивый",
                          "Красивый"
                      ]
                  ],
                  [
                      "question" => "Подкрепление отличий",
                      "answers" => [
                          "Красивый",
                          "Красивый",
                          "Красивый",
                          "Красивый",
                          "Красивый"
                      ]
                  ]
                ];
        }

    }
}
