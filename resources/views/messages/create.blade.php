@extends('layout')

@section('content')
<div class="contents row">
  <div class="container">
    {{ Form::open(['url' => '/messages']) }}
    <h3>投稿する</h3>
    <p>誰に送る？</p>
    <select class="" name="select">
        <option name="" value="" disabled selected style='display:none;'>誰に送る？</option>
      @foreach($users as $user)
      @if ($user->id != Auth::user()->id)
        <option name="who_id" value="{{ $user->id }}">{{ $user->name }}</option>
      @endif
      @endforeach
    </select>
    <input type="hidden" name="who_name" value="">
    <textarea cols="30" name="message" placeholder="メッセージ" rows="10"></textarea>
    <input type="text" name="point" placeholder="何ポイント送る？">
    <input type="submit" name="" value="SENT">
    {{ Form::close() }}
  </div>
</div>
@endsection
