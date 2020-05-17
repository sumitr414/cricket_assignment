<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    /**
     * table name
     * @var string
     */
    protected $table = 'points';

    /**
     * fillable fields
     * @var array
     */
    protected $fillable = [
        'team_id',
        'matchesPlayed',
        'win',
        'loss',
    ];

    /**
     * calculate points
     * @return mixed
     */
    public function getPointsAttribute()
    {
        return ($this->matchesPlayed - $this->loss)+$this->win ;
    }

    /**
     * team details
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function teamDetails(){
        return $this->belongsTo('App\Model\Team','team_id','id');
    }
}
