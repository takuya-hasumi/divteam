@extends('layout')

@section('content')
<div class="contents row">
  <div class="container">
    {{ Form::open(['url' => '/users']) }}
    <h3>投稿する</h3>
    <input type="text" name="user_name" placeholder="ニックネーム">
    <input type="text" name="usered_id" placeholder="誰に送る？">
    <textarea cols="30" name="message" placeholder="メッセージ" rows="10"></textarea>
    <input type="text" name="point" placeholder="何ポイント送る？">
    <input type="submit" name="" value="SENT">
    {{ Form::close() }}
  </div>
</div>
@endsection
