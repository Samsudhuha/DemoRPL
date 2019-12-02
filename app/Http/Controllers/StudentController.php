<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\comment;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function studentPage(){
        $assignments = Assignment::orderBy('created_at', 'desc')->get();
        $comments = comment::all();
        return view('student')->with('assignments',$assignments)->with('comments', $comments);
    }
    public function comment(Request $addcomment)
    {
        // dd($addpost->input());return;
        $post = new comment;
        $post->id_post = $addcomment->input('id_post');
        $post->isi= $addcomment->input('isi');
        $post->save();

        return Redirect::back();
    }
}
