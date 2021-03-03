{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app') 

{{-- @yield('title')にテンプレートごとの値を代入 --}} 
@section('title','投稿一覧') 

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}} 
@section('content')

<div class="container col-md-9 mx-auto">
    <div class="row">
        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-md-2 g-4"> 
                @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100"><img src="{{ Storage::url($post->picture) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->diary}}</p> 
                            <a class="btn btn-primary" href="/posts/{{$post->id}}" type="button">詳細を表示</a> 
                            <a class="btn btn-primary" href="/posts/{{$post->id}}/edit" type="button">編集する</a>
                            <form action="/posts/{{$post->id}}" method="post"> 
                              {{ csrf_field() }} 
                              <input type="hidden" name="_method" value="delete"> 
                              <button type="submit" class="btn btn-primary" name="" value="削除する"> 
                              {{-- <a href="/posts/{{$post->id}}">削除する</a> --}}
                            </form>
                            <!-- {{-- <a href="/posts/{{$post->id}}">削除する</a> --}} -->
                        </div>
                        <div class="card-footer"> <small class="text-muted">Last updated 3 mins ago</small> </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-3">
            <div class="d-grid gap-2">
                <a class="btn btn-primary" href="/posts/create" role="button">新規投稿</a>
                <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-primary" type="button">Button</button>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <nav aria-label="Search results pages">
            <ul class="pagination pagination-md justify-content-center">
                <li class="page-item active" aria-current="page"> <span class="page-link">1</span> </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
            </ul>
        </nav>
    </div>

    <div class="row">
        <footer class="footer mt-auto py-3">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <p>A well-known quote, contained in a blockquote element.</p>
                </blockquote>
                <figcaption class="blockquote-footer"> Someone famous in <cite title="Source Title">Source Title</cite> </figcaption>
            </figure>
        </footer>
    </div>

</div>
@endsection