@extends('layout')

@section('content')
  <div class="contents row">
    <p>{{ $name->name }}さんの保有ポイント： {{ $name->points }}ポイント</p>
    <p>{{ $name->name }}さんの所属しているチーム：</p>
    <ul>
      @foreach ($members as $member)
      <li>{{ $member->team_name }}</li>
      @endforeach
    </ul>
    <p class="users-top">{{ $name->name }}さんの褒め履歴</p>
    <p class="messageforme clearfix"><a href="/users/{{ $name->id }}/given">自分への褒め履歴</a></p>
    @foreach($messages as $message)
        <div class="content_post">
            <h3>{{ $message->who_name }} さんへ</h3>
            <p>{{ $message->message }}</p>
            <h4>{{ $message->point }}賞賛ポイントをあげました！</h4>
        </div>
    @endforeach
    {{ $messages->render() }}
  </div>
@endsection
