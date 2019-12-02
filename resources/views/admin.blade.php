@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body{
                background-color: burlywood;
            }
            #teacher{
                margin-top: 80px;
            }
            .dashboard{
                text-align: center;
            }
        </style>
    </head>
    <body>
    <div id="teacher" class="container">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="card">
                    <div class="card-header" style="background-color:chocolate">Dashboard</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="dashboard">
                        <p>You are logged in Admin!</p>
                        <h2>halo {{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    </body>
</html>

@endsection