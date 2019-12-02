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
        <div id="teacher" class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color:chocolate">Assignment</div>

                    <div class="card-body">
                        <form method="POST" action="{{ url('/edit/'.$data->id) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Sub Materi</label>
                                <div class="col-md-6">
                                    <input type="text" name="grade" class="form-control" value="{{$data->name}}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">file</label>
                                <div class="col-md-6">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file" required name="file" value="{{$data->paths}}" multiple>
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
    </body>
</html>
@endsection