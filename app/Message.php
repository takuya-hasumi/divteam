<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Message extends Model
{
    protected $fillable = [
      'who_name', 'who_id', 'point', 'message', 'user_id', 'user_name'
    ];

    public function users()
    {
      return $this->belongsTo(User::class);
    }
}
