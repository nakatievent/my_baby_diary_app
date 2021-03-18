{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app') 

{{-- @yield('title')にテンプレートごとの値を代入 --}} 
@section('title','投稿一覧') 

{{-- app.blade.phpの@yield('content')に以下のレイアウトを代入 --}} 
@section('content')

<div class="container col-md-12 mx-auto">
    <div class="row">
        <div class="col-md-9">

        <nav class="navbar navbar-expand-lg navbar-light py-4">
            <div class="container-fluid">
                <a class="navbar-brand fs-3" href="{{ route('posts.index') }}">
                    Babydiary 〜子供の成長日記〜
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link active fs-4" aria-current="page" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link fs-4" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>

                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </li>
                        @endguest
                    </ul>

                    <form class="d-flex">
                        <input class="form-control me-2" type="search" name="keyword" placeholder="検索したい単語を入力" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    
                </div>
            </div>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-9">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach ($posts as $post)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ Storage::url($post->picture) }}" class="card-img-top img-thumbnail img-fluid" style="width: 100%; height: 300px;" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center fw-bolder">{{ $post->title }}</h5>
                            <hr>
                            <p class="card-text text-truncate">{{ $post->diary }}</p>
                        </div>

                        <div class="card">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-grid gap-2"><a class="btn btn-light btn-sm" href="/posts/{{ $post->id }}" type="button">詳細を表示</a></li>
                                <li class="list-group-item d-grid gap-2"><a class="btn btn-light btn-sm" href="/posts/{{ $post->id }}/edit" type="button">編集する</a></li>
                                <li class="list-group-item d-grid gap-2">
                                    <form class="d-grid .gap-2">
                                        <a class="btn btn-light btn-sm" href="/posts/add_favorite/{{ $post->id }}" type="button">お気に入りに追加</a>
                                    </form>
                                </li>
                                <li class="list-group-item d-grid gap-2">
                                    <form action="{{ route('posts.destroy', $post->id) }}" method="post" class="d-grid .gap-2"> 
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="_method" value="delete"> 
                                        <input type="submit" class="btn btn-danger btn-sm" name="" value="削除する" >
                                    </form>
                                </li>
                            </ul>

                            <div class="card-footer text-center"><small class="text-muted">投稿日：{{ $post->created_at }}</small></div>

                        </div>

                    </div>
                </div>
                @endforeach
            </div>
            <br>
        </div>
    </div>

    <br>



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