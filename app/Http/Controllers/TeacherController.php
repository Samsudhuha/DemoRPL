<?php

namespace App\Http\Controllers;

use App\Assignment;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    public function teacherPage(){
        $assignments = Assignment::orderBy('created_at', 'desc')->get();
        $comments = comment::orderBy('created_at', 'desc')->get();
        return view('teacher')->with('assignments',$assignments)->with('comments', $comments);
    }

    public function delete($id){
        $assignments = assignment::find($id);
        $assignments->delete();

        $assignments = Assignment::orderBy('created_at', 'desc')->get();
        return redirect('/teacher');
    }

    public function edit($id){
        $data = Assignment::findOrFail($id);
        
        return view('edit')->with('data',$data);
    }

    public function edit_data(Request $editdata, $id){
        // dd($editdata->input()); return;
        $data = Assignment::findOrFail($id);
        $data->name = $editdata->input('grade');
        $data->paths= $editdata->input('file[]');
        $data->save();

        $data = Assignment::all();
        $comment = comment::all();
        return view('teacher')->with('assignments',$data)->with('comments', $comment);
    }
}
