<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    /**
     * table name
     * @var string
     */
    protected $table = 'matches';

    /**
     * fillable array
     * @var array
     */
    protected $fillable = [
        'teamA',
        'teamB',
        'winner',
        'matchDate',
    ];

    /**
     * get teamA details
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teamADetails(){
       return $this->hasOne('App\Model\Team','id','teamA');
    }

    /**
     * get teamB details
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teamBDetails(){
       return $this->hasOne('App\Model\Team','id','teamB');
    }

    /**
     * get winner team details
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function winnerTeam(){
       return $this->hasOne('App\Model\Team','id','winner');
    }
}
