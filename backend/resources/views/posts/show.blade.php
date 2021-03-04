{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '日記の詳細')

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')

<div class="container col-md-5">
    <div class="row">
        <div class="card mb-3">
          <img src="{{ Storage::url($post->picture) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->diary }}</p>
                <div class="d-flex justify-content-around">
                    <a class="btn btn-primary" href="/posts/{{ $post->id }}/edit" type="button">編集する</a>
                    <a class="btn btn-primary" href="/posts" type="button">一覧に戻る</a>
                </div>
            <p class="card-text text-center"><small class="text-muted">投稿日：{{ $post->created_at }}</small></p>
          </div>
        </div>
    </div>
</div>

@endsection