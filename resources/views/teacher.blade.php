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
                        <p>You are logged in as Teacher!</p>
                        <h2>halo {{ Auth::user()->name }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:chocolate">Assignment</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('upload.assignment')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Sub Materi</label>
                                <div class="col-md-6">
                                    <input type="text" name="grade" class="form-control" required>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">file</label>
                                <div class="col-md-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" required name="file[]" multiple>
                                        <label class="custom-file-label" for="file">Choose file...</label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
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
                                <div style="float:right;"> 
                                    <a href="{{url('/edit/'.$assignment->id)}}" class="btn btn-warning">edit</a> 
                                    <a href="{{url('/delete/'.$assignment->id)}}" class="btn btn-danger">delete</a>
                                </div>                                                              
                            </table>
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
    </body>
</html>

@endsection