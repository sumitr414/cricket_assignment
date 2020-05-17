<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * table name
     * @var string
     */
    protected $table = 'players';

    /**
     * fillable fields
     * @var array
     */
    protected $fillable = [
        'team_id',
        'firstName',
        'lastName',
        'imageUri',
        'playerJerseyNo',
        'country',
        'matches',
        'runs',
        'highestScore',
        'fifties',
        'hundreds',
    ];

    /**
     * combine first and last name
     * @return string
     */
    public function getNameAttribute()
    {
        return ucwords($this->firstName.' '.$this->lastName);
    }
}
