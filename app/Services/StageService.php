<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class StageService
{
    public function getAllStages()
    {
        return DB::table('stages')->pluck('stage');
    }

    public function getStagesCount(): int
    {
        return DB::table('stages')->count();
    }

    public function getTeamsForStages($teacherId, $game_id)
    {
        $stages = $this->getAllStages();

        $teams = DB::table('games_groups')
                         ->select(DB::raw(
                             'groups.name as "team_name",
                              games_groups.group_id as "group_id"'))
                         ->distinct()
                         ->leftJoin('groups', 'games_groups.group_id', 'groups.id')
                         ->leftJoin('games', 'games_groups.game_id', 'games.id')
                         ->leftJoin('judges', 'judges.game_id', 'games_groups.game_id')
                         ->where('games_groups.game_id', '=', $game_id)
                         ->where('judges.teacher_id', '=', $teacherId)
                         ->where('games.end_date', '>', date('Y-m-d H:i:s'))
                         ->get();

        $teams = json_decode(json_encode($teams, true), true);

        $result = [];

        foreach ($stages as $stage)
        {
            $result[] = [
                "stage_name" => $stage,
                "teams" => $teams
            ];
        }
        // dd($result);

        return $result;
    }
}
