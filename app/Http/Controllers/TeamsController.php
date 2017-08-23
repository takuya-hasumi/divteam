<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Team;
use App\User;

class TeamsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function index()
    {
      $teams = Team::groupBy('team_id')
        ->orderBy('updated_at', 'DESC')
        ->paginate(20);
      // dd($teams);
      return view('teams.index')->with('teams', $teams);
    }

    public function create()
    {
      $users = User::all();
      return view('teams.create')
        ->with('users', $users);
    }

    public function store(Request $request)
    {
      Team::create(
        array(
          'team_name'   => $request->team_name,
          'leader_id'   => $request->select,
          'member_id'   => $request->select,
          'member_name' => $request->leader_name,
        )
      );
      return view('teams.store');
    }

    public function show($id)
    {
      $team = Team::find($id);
      $members = Team::where('team_name', $team->team_name)
        ->get();
      return view('teams.show')
        ->with(['team' => $team, 'members' => $members]);
    }

    public function join($id)
    {
      $team = Team::find($id);
      // dd($id);

      return view('teams.join')
        ->with('team', $team);
    }

    public function joined(Request $request)
    {
      Team::create(
        array(
          'team_id'     => $request->team_id,
          'team_name'   => $request->team_name,
          'leader_id'   => $request->leader_id,
          'member_id'   => Auth::user()->id,
          'member_name' => Auth::user()->name,
        )
      );
      return view('teams.joined');
    }
}
