<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">

  <title>ログインページの編集</title>
</head>

<body>
  <div class="container">
    <div class="row">

    </div>

    <div class="row">
      <div class="col-md-6 mx-auto border border-dark border-3 p-5 position-absolute top-50 start-50 translate-middle">

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="fw-bolder text-center">
          <h1 class="fw-bolder fs-2">採用担当者様<br>専用ログインフォーム</h1>
          <p></p>
          <p>下記の「専用ログイン」ボタンを押して頂くと、すぐにログインが可能です。</p>
        </div>

        <form class="col-lg-8 mx-auto" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- メールアドレス -->
            <div class="form-group">
                <label for="email" class="form-label">メールアドレス</label>
                <input id="email" class="form-control" type="email" name="email" aria-describedby="emailHelp" :value="old('email')" required autofocus/>
            </div>

            <br>

            <!-- パスワード -->
            <div class="form-group">
                <label for="password" class="form-label">パスワード</label>
                <input id="password" class="form-control" type="password" name="password"
                       required autocomplete="current-password">
            </div>

            <br>

            <!-- Remember Me -->
            <div class="form-check">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label class="form-check-label" for="remember_me">{{ __('ログイン状態を維持する') }}</label>
                </label>
            </div>

            <div class="flex items-center justify-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ ('パスワードを忘れましたか?') }}
                    </a>
                @endif

                　<button type="submit" class="btn btn-primary">専用ログイン</button>
                </button>
            </div>
        </form>
        </div>
    </div>
  </div>

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

</body>

</html>