@extends('layout')

@section('content')
  <div class="contents row">
    <p>{{ $team->team_name }}チームの詳細</p>
    <a style="float:right;" href="/teams/{{ $team->id }}/join">このチームに加わる</a>
    <div class="content_post">
        <h2>チーム名：{{ $team->team_name }}</h2>
        <h3>チームメンバー：</h3>
        @foreach ($members as $member)
        <p>{{ $member->member_name }}</p>
        @endforeach
    </div>
    <p><a href="/teams">一覧に戻る</a></p>
  </div>
@endsection
