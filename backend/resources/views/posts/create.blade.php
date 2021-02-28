{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '新規作成')

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <form action="/posts" method="post">
    {{-- 以下を入れないとエラーになる --}}
    {{ csrf_field() }}
    <div class="mb-3">
        <label for="picture" class="form-label">写真を選んで下さい</label>
        <input class="form-control" type="file" id="picture" name="picture">
    </div>
    <div>
      <label for="title">タイトル</label>
      <input type="text" name="title" placeholder="記事のタイトルを入れる">
    </div>
    <div>
      <label for="diary">内容</label>
      <textarea name="diary" rows="8" cols="80" placeholder="記事の内容を入れる"></textarea>
    </div>
    <div>
      <input type="submit" value="送信">
    </div>
  </form>
@endsection