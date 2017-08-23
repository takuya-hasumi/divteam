@extends('layout')

@section('content')
  <div class="contents row">
    <p>{{ $name->name }}さんの褒められた履歴</p>
    @foreach($messages as $message)
        <div class="content_post">
            <h3>{{ $message->user_name }} さんから {{ $name->name }} さんへ</h3>
            <p>{{ $message->message }}</p>
            <h4>{{ $message->point }}賞賛ポイントをもらいました！</h4>
        </div>
    @endforeach
    {{ $messages->render() }}
  </div>
@endsection
