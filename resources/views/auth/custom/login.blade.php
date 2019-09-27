<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png"> --}}
    {{-- <link rel="manifest" href="/img/favicon/site.webmanifest"> --}}
    {{-- <link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#ff2d20"> --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    {{-- <meta name="msapplication-TileColor" content="#ff2d20"> --}}
    {{-- <meta name="msapplication-config" content="/img/favicon/browserconfig.xml"> --}}
    <meta name="theme-color" content="#ffffff">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - Login</title>

    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" id="bootstrap-css">

    <style>
        /* @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"); */
        body{
            background: rgb(23,89,224);
background: linear-gradient(90deg, rgba(23,89,224,0.8925945378151261) 8%, rgba(38,101,210,0.7861519607843137) 84%, rgba(0,123,255,0.6993172268907564) 100%);
        }
        .login-block{
            /* background: #DE6262; /*    fallback for old browsers
            background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262); /*   Chrome 10-25, Safari 5.1-6
            background: linear-gradient(to bottom, #FFB88C, #DE6262);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            float:left;
            width:100%;
            height: 100% !important;
            padding : 50px 0;
        }
        .banner-sec{
            box-shadow:15px 10px 0px rgba(0,0,0,0.1);
        }
        .login-form{
            padding : 0px 15px;
        }
        .container{
            /* background:#fff; */
        }
        .carousel-inner{
            /* border-radius:0 10px 10px 0; */
        }
        .carousel-caption{text-align:left; left:5%;}
        .login-sec{
            padding: 40px 30px; position:relative; background:#fff;
            box-shadow:15px 10px 0px rgba(0,0,0,0.1);
        }
        /* .login-sec .copy-text{
            position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
        .login-sec .copy-text i{
            color:#FEB58A;}
        .login-sec .copy-text a{
            color:#E36262;} */
        .login-sec h2{
            margin-bottom:20px; font-weight:800; font-size:30px; color: #DE6262;}
        .login-sec h2:after{
            content:" "; width:100px; height:3px; background:#FEB58A; display:block; margin-top:15px; border-radius:3px; margin-left:auto;margin-right:auto}
        .btn-login{
            background: #DE6262; color:#fff; font-weight:600;}
        .banner-text{
            width:70%; position:absolute; bottom:40px; padding-left:20px;}
        .banner-text h2{
            color:#fff; font-weight:600;}
        .banner-text h2:after{
            content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
        .banner-text p{color:#fff;}
    </style>
</head>
<body>
    <section class="login-block">
        <div class="container">
            <div class="row no-gutters justify-content-center">

                <div class="col-4 login-sec">
                    <h2 class="text-center">Login Now</h2>
                    <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input placeholder="Username" id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>


                        <div class="form-check">
                            <label class="form-check-label" for="remember">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">Login</button>
                        </div>
                    </form>



                    <div class="copy-text mt-4">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                Forget Password
                            </a>
                        @endif
                    </div>
                </div>

                <div class="col-4 banner-sec">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="d-block img-fluid" src="{{ Storage::url('slider/cover1.jpg') }}" alt="First slide">
                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ Storage::url('slider/cover2.jpg') }}" alt="First slide">
                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="carousel-item">
                                <img class="d-block img-fluid" src="{{ Storage::url('slider/cover3.jpg') }}" alt="First slide">
                                {{-- <div class="carousel-caption d-none d-md-block">
                                    <div class="banner-text">
                                        <h2>This is Heaven</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
