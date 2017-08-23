@extends('layout')

@section('content')
<div class="contents row">
  <div class="container">
    {{ Form::open(['url' => '/teams/'. $team->id .'/joined']) }}
    <h3>「{{ $team->team_name }}」チームに加わる</h3>
    <p style="text-align:center;">このチームに入りますか？</p>
    <input type="hidden" name="team_id" value="{{ $team->id }}">
    <input type="hidden" name="team_name" value="{{ $team->team_name }}">
    <input type="hidden" name="leader_id" value="{{ $team->leader_id }}">
    <input type="submit" name="" value="yes">
    {{ Form::close() }}
  </div>
</div>
@endsection
