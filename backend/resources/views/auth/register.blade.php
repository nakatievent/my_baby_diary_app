<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!-- <link rel="stylesheet" type="text/css" href="login.css"> -->

  <title>新規登録ページ</title>
</head>

<body>
  <div class="container">

    <div class="row">
      <div class="col-md-6 mx-auto border border-dark border-3 p-5 position-absolute top-50 start-50 translate-middle">

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <div class="fw-bolder text-center">
                <h1 class="fw-bolder fs-2"><br>新規登録フォーム</h1>
                <p></p>
                <p>下記の項目を記入後、「新規登録」ボタンを押して頂くと、ログインが可能です。</p>
        </div>

        <form class="col-lg-8 mx-auto" method="POST" action="{{ route('register') }}">
            @csrf

            <!-- 名前 -->
            <div class="form-group">
                <label for="name" class="form-label">お名前</label>
                <input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus>
            </div>

            <br>

            <!-- メールアドレス -->
            <div class="form-group">
                <label for="email" class="form-label">メールアドレス</label>
                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
            </div>

            <br>

            <!-- パスワード -->
            <div class="form-group">
                <label for="password" class="form-label">パスワード</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
            </div>

            <!-- Confirm Password -->
            <div class="flex items-center justify-center mt-4">
                <label for="password_confirmation" class="form-label">パスワードの認証</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('登録済みですか？') }}
                </a>

                　<button type="submit" class="btn btn-primary">新規登録</button>

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