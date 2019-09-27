<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>

    {{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" id="bootstrap-css">

    <style>
        /* @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"); */
        body{
            background: rgb(224,62,23);
            background: linear-gradient(90deg, rgba(224,62,23,0.8925945378151261) 16%, rgba(226,40,46,0.6993172268907564) 57%, rgba(255,44,0,0) 100%);
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
                    <form class="login-form">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                            <input type="text" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                            <input type="password" class="form-control" placeholder="">
                        </div>


                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                                <small>Remember Me</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">Submit</button>
                        </div>

                    </form>

                    {{-- <div class="copy-text">Created with <i class="fa fa-heart"></i> by Grafreez</div> --}}
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
