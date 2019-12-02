<?php

namespace App\Http\Controllers;

use App\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function uploadAssignment(Request $request){
        $paths = [];
        foreach ($request->file as $file) {
            $path = $file->store('public/file/assignment');
            array_push($paths, str_replace('public/', '', $path));
        }
        Assignment::create([
            'name' => $request->grade,
            'paths' => implode('|', $paths)
        ]);
        return redirect()->back();
    }
}
