@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto border border-dark border-3 p-5 position-absolute top-50 start-50 translate-middle">

            <form class="col-lg-10 mx-auto" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="fw-bolder text-center">
                    <h1 class="fw-bolder fs-2">新規登録フォーム</h1>
                    <p></p>
                    <p>下記の項目を入力後、「新規登録」ボタンを押すとすぐに始めることができます。</p>
                </div>

                <div class="form-group">
                    <label for="name" class="form-label">{{ __('お名前') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  
                           autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <br>

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('メールアドレス') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"    
                           required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <br>

                <div class="form-group">
                    <label for="password" class="form-label">{{ __('パスワード') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required 
                           autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <br>

                <div class="form-group">
                    <label for="password-confirm" class="form-label">{{ __('＊確認の為、パスワードを再度入力して下さい') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <br>

                <div class="signup-btn d-grid gap-2 d-md-block text-center">
                    <button type="submit" class="btn btn-primary">{{ __('新規登録') }}</button>
                    <a href="/" type="button" class="btn btn-primary">HOMEへ戻る</a>
                </div>

            </form>

        </div>
    </div>
</div>
@endsection
