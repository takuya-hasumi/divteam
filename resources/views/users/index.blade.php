@extends('layout')

@section('content')
  <div class="contents row" >
    <h2>ユーザ一覧画面</h2>
    @foreach($users as $user)
      <div class="content_post">
        <p><a href="/users/{{ $user->id }}">{{ $user->name }}</a></p>
      </div>
    @endforeach
    {{ $users->render() }}
  </div>
@endsection
