<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function __construct()
    {
      // parent::__construct();
      $this->middleware('auth', array('except' => 'index'));
    }

    public function index()
    {
      $messages = Message::orderBy('message_id', 'DESC')->paginate(20);
      return view('messages.index')->with('messages', $messages);
    }

    public function create()
    {
      return view('messages.create');
    }

    public function store(Request $request)
    {
      Message::create(
        array(
          'user_name'  => $request->user_name,
          'point'      => $request->point,
          'message'    => $request->message,
        )
      );
      return view('messages.store');
    }
}
