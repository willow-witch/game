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
            ->leftJoin('games', 'games.id', 'games_groups.game_id')
            ->leftJoin('student_groups', 'groups.id', 'student_groups.group_id')
            ->where('student_groups.student_id', '=', $student_id)
            ->where('games.end_date', '>', date('Y-m-d H:i:s'))
            ->get();


        //dd($selectGames);

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
            $index++;
        }
        //dd($result);
        return $result;
    }

    public function getGameByTeam($team) : int|null
    {
        return DB::table('games_groups')
            ->select(DB::raw(
                'games_groups.game_id as "game"'))
            ->where('games_groups.group_id', '=', $team)
            ->value("game");
    }

    public function getGameByStudent($studentId)
    {
        return DB::table('games_students')
                 ->select(DB::raw(
                     'games_students.game_id as "game"'))
                 ->where('games_students.student_id', '=', $studentId)
                 ->value("game");
    }

    public function createGame($startDate, $endDate, $teamsAmount, $password="password"): int
    {
        return DB::table('games')->insertGetId(
            [
                'start_date'=> $startDate,
                'end_date'=> $endDate,
                'teams_amount' => $teamsAmount,
                'password'=> $password
            ]
        );
    }

    public function bindStudentToGame($studentId, $gameId):void
    {
        DB::table('games_students')->insert([
            'game_id' => $gameId,
            'student_id' => $studentId,
        ]);
    }

    public function bindGroupToGame($teamId, $gameId):void
    {
        DB::table('games_groups')->insert([
            'game_id' => $gameId,
            'group_id' => $teamId
        ]);
    }

    public function getGamesForTeacher($teacherId): array
    {
        $selectGames = DB::table('games_groups')
                         ->select(DB::raw(
                             'concat("game_", games_groups.game_id) as "game_name",
                            "не завершено" as "status",
                            games_groups.game_id as "game_id"'))
                        ->distinct()
                         ->leftJoin('groups', 'games_groups.group_id', 'groups.id')
                         ->leftJoin('games', 'games_groups.game_id', 'games.id')
                         ->leftJoin('judges', 'judges.game_id', 'games_groups.game_id')
                         ->where('judges.teacher_id', '=', $teacherId)
                         ->where('games.end_date', '>', date('Y-m-d H:i:s'))
                         ->get();


        $selectGames = json_decode(json_encode($selectGames, true), true);

        return $selectGames;

        // return [
        //     [
        //         "game_name" => "game1",
        //         "status" => "не завершено",
        //         "team_name" => "team1"
        //     ],
        //     [
        //         "game_name" => "game3",
        //         "status" => "не завершено",
        //         "team_name" => "team5"
        //     ],
        //     [
        //         "game_name" => "game7",
        //         "status" => "не завершено",
        //         "team_name" => "team2"
        //     ]
        // ];


    }

}
