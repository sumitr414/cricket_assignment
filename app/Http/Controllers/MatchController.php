<?php

namespace App\Http\Controllers;

use Exception;
use App\Model\Match;
use Illuminate\Http\Request;


class MatchController extends Controller
{
    /**
     * get all matches
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getAllMatches(){
       try {
           $matches = $this->matchList();
           return view('pages.match',['matches'=>$matches]);
       }catch(Exception $e){
           return back()->withError($e->getMessage());
       }
    }

    /**
     * match list
     * @return string
     */
    protected function matchList(){
        $matches =  Match::all();
        return $matches??"";
    }
}
