{{-- layoutsフォルダのapp.blade.phpを継承 --}} 
@extends('layouts.app') 

{{-- @yield('title')にテンプレートごとの値を代入 --}} 
@section('title','投稿一覧')

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}} 
@section('content')

<div>
    <a href="/posts/create">新規作成</a>
</div>

<!-- <ここからは日記投稿画面> -->
<div class="row row-cols-1 row-cols-xl-3 g-4">
    @foreach ($posts as $post)
    <div class="col">
        <div class="card h-100"> <img src="image/4212014_s.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$post->title}}</h5>
                <p class="card-text">{{$post->diary}}</p>
                <a href="/posts/{{$post->id}}">詳細を表示</a>
                <a href="/posts/{{$post->id}}/edit">編集する</a>
                <form action="/posts/{{$post->id}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="delete">
                    <input type="submit" name="" value="削除する">
                </form>
                {{-- <a href="/posts/{{$post->id}}">削除する</a> --}}
            </div>
            <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
        </div>
    </div>
    @endforeach
</div>
<br>
<!-- <ここからは日記投稿終了> -->

<!-- ＜ここからはページネーション＞ -->
<nav aria-label="Search results pages">
    <ul class="pagination pagination-md justify-content-center">
        <li class="page-item active" aria-current="page"> <span class="page-link">1</span> </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
    </ul>
</nav>
<!-- ＜ページネーション終了＞ -->
@endsection