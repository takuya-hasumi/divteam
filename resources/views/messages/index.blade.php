@extends('layout')

@section('content')
<div class="content row">
  @foreach($messages as $message)
  <dl class="clearfix">
    <dt>{{ $message->who_name }} へ</dt>
    <dd>
      {{ $message->message }}
      <span>{{ $message->point }}賞賛ポイントをあげました！</span>
    </dd>
    <dd><a href="/users/{{ $message->user_id }}">{{ $message->user_name }}より</a></dd>
  </dl>
  @endforeach
  {{ $messages->render() }}
</div>
@endsection
