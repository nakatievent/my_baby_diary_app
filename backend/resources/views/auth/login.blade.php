@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto border border-dark border-3 p-5 position-absolute top-50 start-50 translate-middle">


            <div class="fw-bolder text-center">
                <h1 class="fw-bolder fs-2">採用担当者様<br>専用ログインフォーム</h1>
                <p></p>
                <p>下記の「専用ログイン」ボタンを押して頂くと、すぐにログインが可能です。</p>
            </div>

            <form class="col-lg-8 mx-auto" method="POST" action="{{ route('login') }}">
                @csrf

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required     
                        autocomplete="current-password">

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

                <div class="flex items-center justify-center mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ ('パスワードを忘れましたか?') }}
                        </a>
                    @endif
                        　<button type="submit" class="btn btn-primary">{{ __('専用ログイン') }}</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
