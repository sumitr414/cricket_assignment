<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    /**
     * table name
     * @var string
     */
    protected $table = 'teams';

    /**
     * fillable fields
     * @var array
     */
    protected $fillable = [
        'name',
        'logoUri',
        'club',
    ];

    /**
     * team players details
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function players(){
        return $this->hasMany('App\Model\Player','team_id','id');
    }
}
