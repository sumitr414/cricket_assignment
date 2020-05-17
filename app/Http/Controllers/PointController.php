<?php

namespace App\Http\Controllers;
use Exception;
use App\Model\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * get team points
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getTeamPoints(){
        try {
            $pointTable = $this->pointTable();
            return view('pages.point',['points'=>$pointTable]);
        }catch(Exception $e){
            return back()->withError($e->getMessage());
        }
    }

    /**
     * get point table
     * @return string
     */
    protected function pointTable(){
        $pointTable =  Point::all()->sortByDesc('points');
        return $pointTable??"";
    }
}
