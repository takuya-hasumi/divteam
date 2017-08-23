@extends('layout')

@section('content')
  <div class="contents row" >
    <div class="teams-head clearfix">
      <h2>チーム一覧画面</h2>
      <ul class="clearfix">
        <li><a href="/teams/create">チームを作成する</a></li>
      </ul>
    </div>
    @foreach($teams as $team)
      <div class="content_post">
        <p><a href="/teams/{{ $team->id }}">{{ $team->team_name }} チーム</a></p>
        <a href="/teams/{{ $team->id }}/join">このチームに加わる</a>
      </div>
    @endforeach
    {{ $teams->render() }}
  </div>
@endsection
