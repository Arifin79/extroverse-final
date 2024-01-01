@extends('layouts.app')

@section('content')

<div class="login">
    <div class="frame">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-wrapper">Sign in</div>
        <div class="overlap-group">
            <input id="email" type="email" class="div @error('email') is-invalid @enderror" name="email" autofocus="true" required placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="overlap">
            <input id="password" type="password" placeholder="Password" class="div @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="div-wrapper">
          <button type="submit" class="text-wrapper-2">
            {{ __('Login') }}
        </button>
        </div>
    </form>
    </div>
    <div class="group">
      <div class="text-wrapper-3">WELCOME!</div>
      <img class="line" src="img/line-1.svg" />
      <p class="p">To Our Company</p>
    </div>
</div>
@endsection
