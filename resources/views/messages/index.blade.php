@extends('layout')

@section('content')
<div class="content row">
  @foreach($messages as $message)
  <dl>
    <dt>{{ $message->user_name }}さんへ</dt>
    <dd>{{ $message->message }}</dd>
  </dl>
  @endforeach
  {{ $messages->render() }}
</div>
@endsection
