<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test\Game;
use App\Models\Test\User;
use App\Models\Test\UserGame;

class TestController extends Controller
{
    public function group_by($key, $data)
    {
        $result = array();

        foreach ($data as $val) {
            if (array_key_exists($key, $val)) {
                $result[$val[$key]][] = $val;
            } else {
                $result[""][] = $val;
            }
        }
        return $result;
    }

    public function groupByDate($keyDate, $keySkill, $data)
    {
        $resultDate = array();
        $result = array();

        $resultDate = $this->group_by($keyDate, $data);

        foreach ($resultDate as $key => $valDate) {
            $temp = $this->group_by($keySkill, $valDate);
            $result[$key] = $temp;
        }

        return $result;
    }

    public function one()
    {
        $data = [
            [
                'id' => 1,
                'interviewer' => 'Riddle',
                'interviewee' => 'Larry',
                'skill' => 'PHP',
                'date' => '2021/01/01',
            ],
            [
                'id' => 2,
                'interviewer' => 'Hugh',
                'interviewee' => 'Kuro',
                'skill' => 'ReactJs',
                'date' => '2021/01/02',
            ],
            [
                'id' => 3,
                'interviewer' => 'Hugh',
                'interviewee' => 'Kusa',
                'skill' => 'PHP',
                'date' => '2021/01/03',
            ],
            [
                'id' => 4,
                'interviewer' => 'Riddle',
                'interviewee' => 'Fuku',
                'skill' => 'PHP',
                'date' => '2021/01/01',
            ],
            [
                'id' => 5,
                'interviewer' => 'Hugh',
                'interviewee' => 'Kevin',
                'skill' => 'PHP',
                'date' => '2021/01/03',
            ],
            [
                'id' => 6,
                'interviewer' => 'Will',
                'interviewee' => 'Neko',
                'skill' => 'Ruby',
                'date' => '2021/01/01',
            ],
        ];

        $byGroup = $this->groupByDate("date", "skill", $data);
        echo "<pre>";
        print_r($byGroup);
        echo "</pre>";
    }

    public function ArrayMerge($arrayOne, $arrayTwo, $array)
    {
        $arrayMerge = Array_merge($arrayOne, $arrayTwo);
        foreach ($arrayMerge as $key => $value) {
            if (in_array($value, $array)) {
                unset($arrayMerge[$key]);
            }
        }

        return $arrayMerge;
    }

    public function two()
    {

        $result = array();

        $arrayOne = [1, 2, 5, 15, 9, 10, 20];
        $arrayTwo = [5, 12, 1, 10, 9, 11, 3, 8];
        // result = [2, 15, 20, 12, 11, 3, 8]

        $arrayMergeOne = $this->ArrayMerge($arrayOne, $arrayTwo, $arrayOne);
        $arrayMergeTwo = $this->ArrayMerge($arrayOne, $arrayTwo, $arrayTwo);

        $result = array_merge($arrayMergeTwo, $arrayMergeOne);

        echo "<pre>";
        print_r($result);
        echo "</pre>";

    }

    public function three()
    {
        $users = User::all();
        $games = Game::all();
        $usergames = UserGame::all();

        $userMaxScores = UserGame::with('games')
        ->join('users', 'users.id', '=', 'game_user.user_id')
        ->selectRaw('users.name as username,game_id,max(score) as max_score')
        ->groupBy('game_id')
        ->get();
        return view('test.testThree.index', compact('userMaxScores','users','games','usergames'));
    }
}
