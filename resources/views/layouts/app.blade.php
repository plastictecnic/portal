<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }} <small class="cus-small">30481-V</small>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item c-margin-right">
                            <a class="nav-link btn btn-outline-info btn-sm" href="">
                                <i class="fa fa-calendar" aria-hidden="true"></i> &nbsp; Holiday {{ \Carbon\Carbon::now()->year }}
                            </a>
                        </li>
                        <li class="nav-item c-margin-right">
                            <a class="nav-link btn btn-outline-info btn-sm" href="">
                                <i class="fa fa-address-book"></i> &nbsp; Business Directory
                            </a>
                        </li>
                        <li class="nav-item c-margin-right">
                            <a class="nav-link btn btn-outline-info btn-sm" href="">
                                <i class="fa fa-users"></i> &nbsp; Staff Directory
                            </a>
                        </li>
                        <li class="nav-item c-margin-right">
                            <a class="nav-link btn btn-outline-info btn-sm" href="">
                                <i class="fa fa-bolt"></i> &nbsp; Tech Highlight
                            </a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @if (Route::has('login'))
                @auth
                    {{-- show after login --}}
                    <div class="container">
                        <div class="row justify-content-center">

                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row">
                                            <div class="col-md-6">Navigation</div>
                                            <div class="col-md-6 text-right">
                                                <a href="{{ route('home') }}" class="btn btn-sm"> H
                                                    {{-- <img style="width:25px;" src="{{ Storage::url(Auth::user()->profile->picture_path) }}" alt=""> --}}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        {{-- left menu --}}
                                        @include('menus.left-menu')
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-9">
                                @yield('content')
                            </div>

                        </div>
                    </div>
                @else
                    {{-- show before login --}}
                    @yield('content')
                @endauth
            @endif

        </main>
    </div>

    {{-- Footer --}}
    <footer class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; {{ \Carbon\Carbon::now()->year }} <a target="_blank" href="http://plastictecnic.com">Plastictecnic Sdn. Bhd.</a> All right reserved.
            <a target="_blank" href="#">Terms &amp; Condition</a></small>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- Custom Script --}}
    @yield('custom-js')

</body>
</html>
