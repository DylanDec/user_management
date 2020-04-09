<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Title and favicon --}}
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />

    {{-- CSS Files --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@mdi/font@5.0.45/css/materialdesignicons.min.css">

    {{-- JS Files --}}
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.js"></script>

</head>


<body>


{{-- Navbar --}}

<nav class="navbar has-shadow" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
            <img src="{{ asset('cdn/laravel.png') }}" >
        </a>
        <a class="navbar-item mr-5" href="https://bulma.io">
            {{ config('app.name') }}
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item">
                Home
            </a>

            <a class="navbar-item">
                Documentation
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    More
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        About
                    </a>
                    <a class="navbar-item">
                        Jobs
                    </a>
                    <a class="navbar-item">
                        Contact
                    </a>
                    <hr class="navbar-divider">
                    <a class="navbar-item">
                        Report an issue
                    </a>
                </div>
            </div>
        </div>

        @guest
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-light" href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                    @if(Route::has('register'))
                    <a class="button is-primary" href="{{ route('register') }}">
                        <strong>Sign up</strong>
                    </a>
                    @endif
                    @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                {{ Auth::user()->name }}
                            </a>

                            <div class="navbar-dropdown is-right">
                                <p class="navbar-item">Welcome, &nbsp;<b>{{ Auth::user()->highestRole() }}</b></p>

                                @can('manage-users')
                                <a class="navbar-item" href="{{ route('admin.users.index') }}">User management</a>
                                @endcan
                                <a class="navbar-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();"
                                >
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                    Report an issue
                                </a>
                            </div>
                        </div>


                        @endguest
                </div>
            </div>
        </div>

    </div>
</nav>

{{-- /Navbar --}}

<div class="section">
    @include('partials.alerts')
    <div class="columns">

{{-- Sidebar navigation --}}

<aside class="column is-2">
    <nav class="menu">
        <p class="menu-label">
            General
        </p>
        <ul class="menu-list">
            <li><a class="is-active">Dashboard</a></li>
            <li><a>Customers</a></li>
        </ul>
        <p class="menu-label">
            Administration
        </p>
        <ul class="menu-list">
            <li><a>Team Settings</a></li>
            <li>
                <a class="">Manage Your Team</a>
                <ul>
                    <li><a>Members</a></li>
                    <li><a>Plugins</a></li>
                    <li><a>Add a member</a></li>
                </ul>
            </li>
            <li><a>Invitations</a></li>
            <li><a>Cloud Storage Environment Settings</a></li>
            <li><a>Authentication</a></li>
        </ul>
        <p class="menu-label">
            Transactions
        </p>
        <ul class="menu-list">
            <li><a>Payments</a></li>
            <li><a>Transfers</a></li>
            <li><a>Balance</a></li>
        </ul>
    </nav>
</aside>

{{-- /Sidebar navigation --}}


{{-- Main content --}}

<main class="column">
    @yield('content')
</main>

{{-- /Main content --}}

    </div>
</div>

</body>


</html>
