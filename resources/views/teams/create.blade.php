@extends('layout')

@section('content')
<div class="contents row">
  <div class="container">
    {{ Form::open(['url' => '/teams']) }}
    <h3>チームを追加する</h3>
    <input type="text" name="team_name" placeholder="チーム名">
    <div class="team-leader">
      <p>チームの管理者を選ぶ</p>
      <select class="" name="select">
        <option name="leader_id" value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
        @foreach($users as $user)
        @if ($user->id != Auth::user()->id)
        <option name="leader_id" value="{{ $user->id }}">{{ $user->name }}</option>
        @endif
        @endforeach
      </select>
      <input type="hidden" name="leader_name" value="{{ Auth::user()->name }}">
    </div>
    <input type="submit" name="" value="SENT">
    {{ Form::close() }}
  </div>
</div>
@endsection
