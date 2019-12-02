@extends('layouts.navbar')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>register</title>
    <style>
        body {
	        margin:  0;
        }
        .page-content {
            height: 862px;
            width: 100%;
            margin:  0 auto;
            background-image: -moz-linear-gradient( 136deg, rgb(254,225,64) 0%, rgb(250,112,154) 100%);
            background-image: -webkit-linear-gradient( 136deg, rgb(254,225,64) 0%, rgb(250,112,154) 100%);
            background-image: -ms-linear-gradient( 136deg, rgb(254,225,64) 0%, rgb(250,112,154) 100%);
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -o-justify-content: center;
            -ms-justify-content: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -o-align-items: center;
            -ms-align-items: center;
            -moz-align-items: center;
            -webkit-align-items: center;
        }
        .form-v7-content  {
            width: 910px;
            margin: 120px 0;
            font-family: 'Open Sans', sans-serif;
            position: relative;
            display: flex;
            display: -webkit-flex;
        }
        .form-v7-content .form-left {
            position: relative;
            color: #fff;
            font-weight: 400;
            width: 92.5%;
            margin-top: 32px;
        }
        .form-v7-content .form-left img {
            width: 100%;
        }
        .form-v7-content .form-left .text-1,
        .form-v7-content .form-left .text-2 {
            position: absolute;
            text-align: center;
            width: 100%;
        }
        .form-v7-content .form-left .text-1 {
            font-size: 38px;
            top: 1.5%;
        }
        .form-v7-content .form-left .text-2 {
            font-size: 16px;
            bottom: 11%;
        }
        .form-v7-content .form-left .text-2::after {
            position: absolute;
            content: "";
            background: #fff;
            height: 1px;
            width: 228px;
            bottom: -50%;
            left: 50%;
            transform: translateX(-50%);
            -o-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            -moz-transform: translateX(-50%);
            -webkit-transform: translateX(-50%);
            opacity: 0.5;
        }
        .form-v7-content .form-detail {
            padding: 73px 80px 41px;
            position: relative;
            width: 100%;
            background: #fff;
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
        }
        .form-v7-content .form-detail .form-row {
            width: 100%;
            position: relative;
        }
        .form-v7-content .form-detail .form-row label {
            color: #666;
            font-weight: 600;
            font-size: 13px;
            margin-bottom: 3px;
            font-family: 'Open Sans', sans-serif;
        }
        .form-v7-content .form-detail .form-row label#valid {
            position: absolute;
            right: 20px;
            top: 35%;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            -o-border-radius: 50%;
            -ms-border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            background: #53c83c;
        }
        .form-v7-content .form-detail .form-row label#valid::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 1px;
            width: 3px;
            height: 8px;
            border: 1px solid #fff;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            transform: rotate(45deg);
        }
        .form-v7-content .form-detail .form-row label.error {
            padding-left: 0;
            margin-left: 0;
            display: block;
            position: absolute;
            bottom: 5px;
            width: 100%;
            background: none;
            color: red;
            font-family: 'Open Sans', sans-serif;
            font-weight: 700;
        }
        .form-v7-content .form-detail .form-row label.error::after {
            content: "\f343";
            font-family: "LineAwesome";
            position: absolute;
            transform: translate(-50%, -50%);
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            right: 10px;
            top: -25px;
            color: red;
            font-size: 18px;
            font-weight: 900;
        }
        .form-v7-content .form-detail .input-text {
            margin-bottom: 28px;
        }
        .form-v7-content .form-detail input {
            width: 100%;
            padding: 5px 15px 10px 15px;
            border: 2px solid transparent;
            border-bottom: 2px solid #e5e5e5;
            appearance: unset;
            -moz-appearance: unset;
            -webkit-appearance: unset;
            -o-appearance: unset;
            -ms-appearance: unset;
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            -o-outline: none;
            -ms-outline: none;
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            font-weight: 700;
            color: #333;
            box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }
        .form-v7-content .form-detail .form-row input:focus {
            border-bottom: 2px solid #2bb33e;
        }
        .form-v7-content .form-detail .register {
            background: #373be3;
            border-radius: 4px;
            -o-border-radius: 4px;
            -ms-border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            width: 180px;
            border: none;
            margin: -13px 0 50px 0px;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            color: #fff;
            font-weight: 700;
            font-size: 15px;
            float: left;
        }
        .form-v7-content .form-detail .register:hover {
            background: #2a2cb0;
        }
        .form-v7-content .form-detail .form-row-last {
            margin-top: 35px;
        }
        .form-v7-content .form-detail .form-row-last input {
            padding: 15px;
        }
        .form-v7-content .form-detail .form-row-last p {
            font-weight: 600;
            font-size: 14px;
            color: #666;
            margin-left: 200px;
        }
        .form-v7-content .form-detail .form-row-last a {
            font-size: 16px;
            color: #373be3;
            padding-left: 15px;
        }
        

      
.form-radio {
  margin-bottom: 18px; }
  .form-radio input {
    width: auto;
    display: inline-block; }

.radio-label {
  padding-right: 72px; }

.form-radio-group {
  padding-bottom: 10px;
  padding-top: 12px; }

.form-radio-item {
    float: left;
  position: relative;
  margin-right: 30px; }
  .form-radio-item label {
    font-weight: 500;
    padding-left: 30px;
    position: relative;
    z-index: 9;
    display: block;
    cursor: pointer;
    text-transform: none; }

    .label-flex {
  justify-content: space-between;
  -moz-justify-content: space-between;
  -webkit-justify-content: space-between;
  -o-justify-content: space-between;
  -ms-justify-content: space-between; }
  .label-flex label {
    width: auto; }
.check {
  display: inline-block;
  position: absolute;
  border: 1px solid #ebebeb;
  border-radius: 50%;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  height: 18px;
  width: 18px;
  top: 0px;
  left: 0px;
  z-index: 5;
  transition: border .25s linear;
  -webkit-transition: border .25s linear; }
  .check:before {
    position: absolute;
    display: block;
    content: '';
    width: 12px;
    height: 12px;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    -ms-border-radius: 50%;
    top: 3px;
    left: 3px;
    margin: auto;
    transition: background 0.25s linear;
    -webkit-transition: background 0.25s linear; }

input[type=radio] {
  position: absolute;
  visibility: hidden; }
  input[type=radio]:checked ~ .check {
    border: 1px solid #329e5e; }
  input[type=radio]:checked ~ .check::before {
    background: #329e5e; }
        a{
            text-decoration: none;
            color: #fef8f1;
            margin-left: 50px;
            letter-spacing: 2px;
            font-family: 'LatoBold', arial;
        }

        /* Responsive */
        @media screen and (max-width: 991px) {
            .form-v7-content {
                margin: 180px 20px;
                flex-direction:  column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
            }
            .form-v7-content .form-left {
                width: 100%;
                margin-bottom: -5px;
            }
            .form-v7-content .form-detail {
                padding: 50px;
                width: auto;
            }
            .form-v7-content .form-detail .register {
                margin-bottom: 80px;
            }
        }
        @media screen and (max-width: 767px) {
            
        }

        @media screen and (max-width: 575px) {
            .form-v7-content .form-detail {
                padding: 30px 20px;
                width: auto;
            }
            .form-v7-content .form-detail .register {
                float: none;
                margin-bottom: 10px;
            }
            .form-v7-content .form-detail .form-row-last p {
                margin-left: 0px;
                margin-bottom: 50px;
            }
        }
    </style>
</head>
<body class="form-v7">
    <div class="page-content">
		<div class="form-v7-content">
			<div class="form-left">
				<img src="img/form-v7.jpg" alt="form">
				<p class="text-1">{{ __('Register') }}</p>
			</div>
            <form class="form-detail" method="POST" action="{{ route('register') }}" id="myform">
                @csrf
				<div class="form-row">
					<label for="name">{{ __('Name') }}</label>
                    <input type="text" name="name" id="name" class="input-text @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-row">
					<label for="email">{{ __('E-Mail Address') }}</label>
					<input type="email" name="email" id="email" class="input-text @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
				<div class="form-row">
					<label for="password">{{ __('Password') }}</label>
                    <input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror" required autocomplete="new-password">
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				</div>
				<div class="form-row">
					<label for="password-confirm">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" id="password-confirm" required autocomplete="new-password">
                    
                </div>
                <div class="form-row">
                    <div class="label-flex">
                        <label for="">Choosing</label>
                    </div>
                    <div class="form-radio-group">            
                        <div class="form-radio-item">
                            <input type="radio" name="role" value="student" id="student">
                            <label for="student">Student</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="role" checked value="teacher" id="teacher">
                            <label for="teacher">Teacher</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="role" value="admin" id="admin">
                            <label for="admin">Admin</label>
                            <span class="check"></span>
                        </div>
                    </div>
                </div>
				<div class="form-row-last">
                    <button type="submit" class="btn btn-primary register">
                        {{ __('Register') }}
                    </button>
                    <a class="btn btn-link" style="font-size:12px;" href="{{ route('login') }}">
                            {{ __('have an account?') }}
                    </a>
                </div>
			</form>
		</div>
    </div>
</body>
@endsection
