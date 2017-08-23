<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\User;

class Team extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'team_id', 'team_name', 'leader_id', 'member_id', 'member_name'
    ];

    public function user()
    {
      return $this->hasMany(User::class);
    }
}
