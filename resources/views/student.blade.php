@extends('layouts.navbar')
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div style="margin-top:60px;">
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
                            <div style="text-align: center;">
                            <p>You are logged in as Student!</p>
                            <h2>halo {{ Auth::user()->name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            @foreach ($assignments as $assignment)
            <div class="row justify-content-center" style="margin-top : 20px;">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header" style="background-color:chocolate">Assignment lists</div>
                            <div class="card-body">
                                <table class="table table-hover">
                                        @php
                                            $files = explode('|', $assignment->paths);
                                        @endphp
                                        <div>
                                            <h1>Sub Materi : <span style="font-size:25px">{{$assignment->name}}</span></h1> 
                                        </div>
                                        <div>
                                            @foreach ($files as $file)
                                                <a src="{{ asset('storage/' . $file) }}"></a>
                                            @endforeach  
                                        </div>                                                            
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if ($comments != Null)
            @foreach ($comments as $comment)
            @if ($comment->id_post == $assignment->id)
                <div class="row justify-content-center" style="margin-top : 20px; margin-left: 0px;">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" style="background-color:chocolate">comment</div>
                                <div class="card-body">
                                    <table class="table table-hover">   
                                        <p style="text-indent: 50px;">{{$comment->isi}}</p>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @endforeach
            @endif
            <form method="POST" action="{{ url('/comment') }}"  enctype="multipart/form-data" id="addpost">
                @csrf
                <div class="row justify-content-center" style="margin-top : 20px; margin-left: 0px;">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header" style="background-color:chocolate">comment</div>
                                <div class="card-body">
                                    <table class="table table-hover">   
                                        <input name="id_post" type="text" class="form-control" value="{{$assignment->id}}" hidden>
                                        <textarea name="isi" rows="3" class="form-control" placeholder="What's happening?" required></textarea>                                                      
                                    </table>
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            @endforeach
        </div>
    </body>
</html>

@endsection