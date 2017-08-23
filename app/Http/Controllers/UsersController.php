<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Message;
use App\Team;

class UsersController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function index()
    {
      $users = User::orderBy('updated_at', 'DESC')->paginate(20);
      return view('users.index')->with('users' , $users);
    }

    public function create()
    {
      return view('users.create');
    }

    public function store(Request $request)
    {
      return view('users.store');
    }

    public function show($id)
    {
      $name = User::find($id);
      $messages = User::find($id)->messages()->orderBy('updated_at', 'DESC')->paginate(5);
      $members = Team::where('member_id', $id)->get();

      return view('users.show')->with(array('name' => $name, 'messages' => $messages, 'members' => $members));
    }

    public function given($id)
    {
      $name = User::find($id);
      $messages = Message::where('who_id', $id)->orderBy('updated_at', 'DESC')->paginate(5);
      return view('users.given')->with(['name' => $name, 'messages' => $messages]);
    }
}
