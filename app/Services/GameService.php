<?php

namespace App\Services;

use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\DB;

class GameService
{
    public function getGames($student_id): array
    {
        $selectGames = DB::table('games_groups')
            ->select(DB::raw(
                'games_groups.group_id,
                games_groups.game_id,
                groups.name'))
            ->leftJoin('groups', 'games_groups.group_id', 'groups.id')
            ->leftJoin('games', 'games_groups.game_id', 'games.id')
            ->leftJoin('games_students', 'games_groups.game_id', 'games_students.game_id')
            ->where('games_students.student_id', '=', $student_id)
            ->where('games.end_date', '>', date('Y-m-d H:i:s'))
            ->get();


        $selectGames = json_decode(json_encode($selectGames, true), true);

        $result = [];
        $index=0;

        //dd($selectGames);

        foreach ($selectGames as $info){
            $result[$index]=[
                "game_name" => 'game_'.$info['game_id'],
                "status" => "не завершено",
                "team_name" => $info['name'],
                'group_id'=> $info['group_id'],
                'game_id'=> $info['game_id']
            ];
        }

        return $result;
    }

    public function getGamesForTeacher(): array
    {
        return [
            [
                "game_name" => "game1",
                "status" => "не завершено",
                "team_name" => "team1"
            ],
            [
                "game_name" => "game3",
                "status" => "не завершено",
                "team_name" => "team5"
            ],
            [
                "game_name" => "game7",
                "status" => "не завершено",
                "team_name" => "team2"
            ]
        ];

//        $selectGames = DB::table('games_groups')
//            ->select(DB::raw(
//                'games_groups.group_id,
//                games_groups.game_id,
//                groups.name'))
//            ->leftJoin('groups', 'games_groups.group_id', 'groups.id')
//            ->leftJoin('games', 'games_groups.game_id', 'games.id')
//            ->leftJoin('games_students', 'games_groups.game_id', 'games_students.game_id')
//            ->where('games_students.student_id', '=', $student_id)
//            ->where('games.end_date', '>', date('Y-m-d H:i:s'))
//            ->get();
//
//
//        $selectGames = json_decode(json_encode($selectGames, true), true);
//
//        $result = [];
//        $index = 0;
//
//        //dd($selectGames);
//
//        foreach ($selectGames as $info) {
//            $result[$index] = [
//                "game_name" => 'game_' . $info['game_id'],
//                "status" => "не завершено",
//                "team_name" => $info['name'],
//                'group_id' => $info['group_id'],
//                'game_id' => $info['game_id']
//            ];
//        }
//
//        return $result;
    }

}
