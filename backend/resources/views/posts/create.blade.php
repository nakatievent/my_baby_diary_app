{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '新規作成')

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto border border-dark border-3 p-5 position-absolute top-50 start-50 translate-middle">

            <div class="fw-bolder text-center">
                <h1 class="fw-bolder fs-2">日記を投稿する</h1>
                <hr>
                <br>
            </div>

            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="mb-3">
                    <label for="picture" class="form-label">写真を選択して下さい</label>
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>

                <div class="form-group">
                    <label for="title" class="form-label">タイトル</label>
                    <input type="text" class="form-control" name="title" placeholder="日記のタイトルを入れて下さい">
                </div>

                <br>

                <div class="form-group">
                    <label for="diary" class="form-label">日記</label>
                    <textarea name="diary" class="form-control" rows="8" cols="80" placeholder="日記の内容を記入して下さい"></textarea>
                </div>

                <br>

                <input type="submit" class="btn btn-primary" value="投稿">
                <a class="btn btn-primary" href="{{ route('posts.index') }}" type="button">一覧に戻る</a>

            </form>

        </div>
    </div>
</div>

@endsection