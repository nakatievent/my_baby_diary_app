{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '日記の詳細')

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <h1>{{$post->title}}</h1>
  <p>{{$post->diary}}</p>
  <br><br>
  <a href="/posts/{{$post->id}}/edit">編集する</a>
  <form action="/posts/{{$post->id}}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="delete">
      <input type="submit" name="" value="削除する">
    </form>
  <a href="/posts">一覧に戻る</a>
@endsection