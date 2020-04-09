@extends('layouts.logreg')

@section('content')
    <div class="columns is-vcentered">
        <div class="login column is-4 ">
            <section class="section">
                <div class="has-text-centered">
                    <img class="login-logo" src="{{ asset('cdn/laravel.png') }}">
                </div>

                <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="field">
                    <label class="label">Username</label>
                    <div class="control has-icons-right">
                        <input id="name" type="text" class="input @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <span class="icon is-small is-right">
                <i class="fa fa-user"></i>
              </span>

                @error('name')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-right">
                        <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="icon is-small is-right">
                <i class="fa fa-envelope"></i>
              </span>

                @error('email')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label">Password</label>
                    <div class="control has-icons-right">
                        <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="new-password">
                        <span class="icon is-small is-right">
                <i class="fa fa-key"></i>
              </span>

                @error('password')
                <p class="help is-danger">{{ $message }}</p>
                @enderror

                    </div>
                </div>

                <div class="field">
                    <label class="label">Confirm password</label>
                    <div class="control has-icons-right">
                        <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
                        <span class="icon is-small is-right">
                <i class="fa fa-key"></i>
              </span>
                    </div>
                </div>
                <div class="has-text-centered">
                    <button class="button is-vcentered is-primary is-outlined" type="submit">Register</button>
                </div>
                <div class="has-text-centered">
                    <a href="{{ route('login') }}"> Already have an account? Log in now !</a>
                </div>
                </form>
            </section>
        </div>
        <div id="particles-js" class="interactive-bg column is-8">

        </div>
    </div>
@endsection
