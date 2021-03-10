{{-- layoutsフォルダのapp.blade.phpを継承 --}} 
@extends('layouts.app') 

{{-- @yield('title')にテンプレートごとの値を代入 --}} 
@section('title','編集') 

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}} 
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto border border-dark border-3 p-5 position-absolute top-50 start-50 translate-middle">

            <div class="fw-bolder text-center">
                <h1 class="fw-bolder fs-2">日記を編集する</h1>
                <hr>
                <br>
            </div>

            <form action="{{ route('posts.update', $post->id) }}" method="post">
                @method('PUT')
                @csrf
                <!-- {{ csrf_field() }} -->

                <div class="form-group">
                    <label for="picture" class="form-label">写真を選択して下さい</label>
                    <input id="picture" type="file" name="picture" class="form-control" value="{{ $post->picture }}">
                </div>

                <br>

                <div class="form-group">
                    <label for="title" class="form-label">タイトル</label>
                    <input id="title" type="text" name="title" class="form-control" placeholder="記事のタイトルを入れる" value="{{ $post->title }}">
                </div>

                <br>

                <div class="form-group">
                    <label for="diary" class="form-label">日記</label>
                    <textarea id="diary" name="diary" class="form-control" rows="8" cols="80" placeholder="記事の内容を入れる">{{ $post->diary }}</textarea>
                </div>

                <br>

                <div class="form-group">
                    <input type="hidden" name="_method" value="patch">
                    <input type="submit" class="btn btn-primary" value="更新">
                </div>

            </form>
        </div>
    </div>
</div>

@endsection