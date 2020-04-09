@extends('layouts.logreg')

@section('content')
    <div class="columns is-vcentered">
        <div class="login column is-4 ">
            <section class="section">
                <div class="has-text-centered">
                    <img class="login-logo" src="{{ asset('cdn/laravel.png') }}">
                </div>
                <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-right">
                        <input class="input @error('email') is-danger @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <span class="icon is-small is-right">
                <i class="fa fa-user"></i>
              </span>
                        {{-- Email error --}}
                @error('email')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control has-icons-right">
                        <input class="input @error('password') is-danger @enderror" id="password" type="password" name="password" required>
                        <span class="icon is-small is-right">
                <i class="fa fa-key"></i>
              </span>
                       {{-- Password error --}}
                @error('password')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
                    </div>
                </div>
                <div class="has-text-centered">
                    <button class="button is-vcentered is-primary is-outlined" type="submit">Login</button>
                </div>
                </form>
                <div class="has-text-centered">
                    <a href="{{ route('register') }}"> Don't you have an account? Sign up now!</a>
                </div>
            </section>
        </div>
        <div id="particles-js" class="interactive-bg column is-8">
        </div>
    </div>
@endsection
