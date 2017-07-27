<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = array('name', 'email', 'password', 'remember_token', 'created_at', 'updated_at');
}
