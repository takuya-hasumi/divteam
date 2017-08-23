<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Message;
use App\User;
use App\Point;

class MessagesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', array('except' => 'index'));
    }

    public function index()
    {
      $messages = Message::orderBy('message_id', 'DESC')->paginate(20);
      return view('messages.index')->with('messages', $messages);
    }

    public function create()
    {
      $users = User::all();
      return view('messages.create')->with('users', $users);
    }

    public function store(Request $request)
    {
      // 送り手のポイントを減らす
      $sender_now_point = User::find(Auth::user()->id)->points;
      $sender_after_point = $sender_now_point - $request->point;
      User::find(Auth::user()->id)->update([
        'points' => $sender_after_point
      ]);
      // 貰い手のポイントを増やす
      $sended_now_point = User::find($request->select)->points;
      $sended_after_point = $sended_now_point + $request->point;
      User::find($request->select)->update([
        'points' => $sended_after_point
      ]);

      Message::create(
        array(
          'who_id'    => $request->select,
          'who_name'  => $request->who_name,
          'point'     => $request->point,
          'message'   => $request->message,
          'user_id'   => Auth::user()->id,
          'user_name' => Auth::user()->name,
        )
      );

      // ポイントのやり取り
      // ポイントテーブルに履歴を残す
      Point::create([
        'user_id' => Auth::user()->id,
        'who_id'  => $request->select,
        'point'   => $request->point,
      ]);


      return view('messages.store');
    }
}
