{{-- @extends('layouts.app') --}}
@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>login</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <!------ Include the above in your HEAD tag ---------->
        <style>
            .wrapper{
                width: 1060px;
                height: 100px;
                margin: 0 auto;
            }   
            a{
                text-decoration: none;
                color: #fef8f1;
                margin-left: 50px;
                letter-spacing: 1px;
                font-family: 'LatoBold', arial;
                font-weight: bold;
                font-size: 16px;
            }

            @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
            .login-block{
                background: #DE6262;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                float:left;
                width:100%;
                padding : 153.5px 0px;
            }
            .banner-sec{
                background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; 
                background-size: cover; 
                min-height:500px; 
                border-radius: 0 10px 10px 0; 
                padding:0;
            }
            .container{
                background:#fff; 
                border-radius: 10px; 
                box-shadow:15px 20px 0px rgba(0,0,0,0.1);
            }
            .carousel-inner{
                border-radius:0 10px 10px 0;
            }
            .carousel-caption{
                text-align:left; left:5%;
            }
            .login-sec{
                padding: 50px 30px; 
                position:relative;
            }
            .login-sec .copy-text{
                position:absolute;
                width:80%; 
                bottom:20px; 
                font-size:13px; 
                text-align:center;
            }
            .login-sec .copy-text i{
                color:#FEB58A;
            }
            .login-sec .copy-text a{
                color:#E36262;
            }
            .login-sec h2{
                margin-bottom:30px; 
                font-weight:800; 
                font-size:30px; 
                color: #DE6262;
            }
            .login-sec h2:after{
                content:" "; 
                width:100px; 
                height:5px; 
                background:#FEB58A; 
                display:block; 
                margin-top:20px; 
                border-radius:3px; 
                margin-left:auto;
                margin-right:auto}
            .btn-login{
                background: #DE6262; 
                color:#fff; 
                font-weight:600;
            }
            .banner-text{
                width:70%; 
                position:absolute; 
                bottom:40px; 
                padding-left:20px;
            }
            .banner-text h2{
                color:#fff; 
                font-weight:600;
            }
            .banner-text h2:after{
                content:" "; 
                width:100px; 
                height:5px; 
                background:#FFF; 
                display:block; 
                margin-top:20px; 
                border-radius:3px;
            }
            .banner-text p{
                color:#fff;
            }
        </style>
    </head>
    <body>
        <section class="login-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 login-sec">
                        <h2 class="text-center">Login Now</h2>
                        <form class="login-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="text-uppercase">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    
                        <div class="form-group">
                            <label for="password" class="text-uppercase">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
            
            
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <small>{{ __('Remember Me') }}</small>
                            </label>
                            <button type="submit" class="btn btn-login float-right">{{ __('Login') }}</button>
                            
                        </div>

                        <div class="form-group" style="margin-top:15px;">

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" style="font-size:12px; margin-left:-25px; margin-top:10px" href="{{ route('password.request') }}">
                                    {{ __('forgot your password?') }}
                            </a>
                            @endif
                            <a class="btn btn-link float-right" style="font-size:12px; margin-top:-31px; margin-right:-15px" href="{{ route('register') }}">
                                        {{ __('dont have an account?') }}
                            </a>
                        </div>
                        </form>
                    </div>
                
                    <div class="col-md-8 banner-sec">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                    
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="banner-text">
                                            <h2>This is Heaven</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>	
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="https://images.pexels.com/photos/7097/people-coffee-tea-meeting.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="banner-text">
                                            <h2>This is Heaven</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                        </div>	
                                    </div>
                                </div>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
@endsection
