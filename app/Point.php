<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
      'user_id', 'who_id', 'point', 'created_at'
    ];
}
