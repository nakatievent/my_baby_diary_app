<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body class="antialiased">
    <div class=".container-fluid img">
        <div class="row">
            <div class="col-lg-12 position-absolute top-50 start-50 translate-middle">

                <div class="outline text-center">
                    <h1 span class="text-light fw-bold display-1">BabyDiaryApp</h1>
                    <h2 class="text-light fw-bolder display-5">~子供の成長日記~</h2>
                    <p class="text-dark fw-bold">さあ、あなたも子供との思い出を日記に綴ろう！</p>
                </div>

                <div class="col-lg-3 btn-group d-flex flex-column mx-auto" role="group" aria-label="Basic outlined example">
                    @if (Route::has('login'))
                        @auth
                        <a href="{{ route('posts.index') }}" type="button" class="btn btn-outline-primary">HOME</a>
                        @else
                            <a href="{{ route('login') }}" type="button" class="btn btn-secondary">ログイン</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" type="button" class="btn btn-light">新規登録</a>
                                @endif
                        @endauth
                    @endif
                </div>

                <br>

                <div class="text-center">
                    <a href="#">
                        <img src="https://tools.applemediaservices.com/api/badges/download-on-the-app-store/black/ja-JP?size=250x83&amp;releaseDate=1344988800&h=d315c7621c22571683ba30586fc5178a" alt="Download on the App Store" style="border-radius: 13px; width: 130px; height: 40px;">
                    </a>
                    <a href="#">
                        <img alt='Google Play で手に入れよう' src="image/google-play-badge.png" style="border-radius: 13px; width: 130px; height: 40px;"/>
                    </a>
                </div>

            </div>
        </div>
    </div>

<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>