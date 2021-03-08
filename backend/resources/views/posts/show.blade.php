{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '日記の詳細')

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto p-5 position-absolute top-50 start-50 translate-middle">

            <div class="card mb-3">
                <img src="{{ Storage::url($post->picture) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bolder">{{ $post->title }}</h5>
                    <hr>
                <!-- <p class="card-text">{{ $post->diary }}</p> -->
                <!-- <p class="card-text text-center"><small class="text-muted">投稿日：{{ $post->created_at }}</small></p> -->
                    <p class="card-text">{{ $post->diary }}</p>

                <div class="card">  
                    <ul class="list-group list-group-flush">
                      <!-- <li class="list-group-item text-center d-grid gap-2">{{ $post->title }}</li> -->
                        <li class="list-group-item d-grid gap-2"><a class="btn btn-light btn-sm" href="/posts/{{ $post->id }}/edit" type="button">編集する</a></li>
                        <li class="list-group-item d-grid gap-2"><a class="btn btn-light btn-sm" href="{{ route('posts.index') }}" type="button">一覧に戻る</a></li>
                        <li class="list-group-item d-grid gap-2">
                            <form action="/posts/{{ $post->id }}" method="post" class="d-grid .gap-2"> 
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete"> 
                                <input type="submit" class="btn btn-danger btn-sm d-grid gap-2" name="" value="削除する" >
                                <!-- {{-- <a href="{{ route('posts.destroy') }} id={{ $posts->id }}">削除する</a> --}} -->
                            </form>
                            <!-- {{-- <a href="{{ route('posts.destroy') }} id={{ $posts->id }}">削除する</a> --}} -->
                        </li>
                        <!-- <li class="list-group-item d-grid gap-2">{{ $post->diary }}</li> -->
                        <li class="list-group-item text-center">投稿日：{{ $post->created_at }}</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection