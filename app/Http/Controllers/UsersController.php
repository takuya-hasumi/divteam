<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    // public function __construct()
    // {
    //   $this->middleware('auth', array('except' => 'index'));
    // }

    public function index()
    {
      return view('users.index');
    }

    public function create()
    {
      return view('users.create');
    }

    public function store(Request $request)
    {
      User::create(
        array(
          'user_name'  => $request->user_name,
          'usered_id'  => $request->usered_id,
          'point'      => $request->point,
          'message'    => $request->message,
        )
      );
      return view('users.store');
    }
}
