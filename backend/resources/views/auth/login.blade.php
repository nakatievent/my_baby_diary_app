@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto border border-dark border-3 p-5 position-absolute top-50 start-50 translate-middle">

            <form class="col-lg-10 mx-auto" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="fw-bolder text-center">
                    <h1 class="fw-bolder fs-2">採用担当者様<br>専用ログインフォーム</h1>
                    <p></p>
                    <p>採用担当者様は、下記の「採用担当者専用ログイン」ボタンを押して頂くと、すぐにログインが可能です（下記のフォームは入力不要です）。</p>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">メールアドレス</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" :value="old('email')" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <br>

                <div class="form-group">
                    <label for="password" class="form-label">パスワード</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <br>

                <div class="form-check">
                    <label for="remember" class="inline-flex items-center">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('ログイン状態を維持する') }}
                    </label>
                </div>

                <br>

                <div class="d-grid gap-2 d-md-block text-center">
                    <button type="submit" class="btn btn-primary">{{ __('ログイン') }}</button>
                    <a href="/" type="button" class="btn btn-primary">HOMEへ戻る</a>
                    <button class="btn btn-danger" href="/login/guest" role="button">＊採用担当者専用ログイン＊</button>
                </div>

                <div class="flex items-center mt-4 mx-auto text-center">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ ('パスワードを忘れましたか?') }}
                        </a>
                    @endif
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
