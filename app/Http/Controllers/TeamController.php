<?php

namespace App\Http\Controllers;

use Exceptions;
use App\Model\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * get team data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAllTeam(){
        try {
            $teams = $this->teamList();
            return view('pages.team',['teams'=>$teams]);
        }catch(Exception $e){
            return back()->withError($e->getMessage());
        }
    }

    /**
     * get team list
     * @return string
     */
    protected function teamList(){
        $team =  Team::all();
        return $team??"";
    }
}
