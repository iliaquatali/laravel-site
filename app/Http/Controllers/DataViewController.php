<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DataViewController extends Controller
{
    
    public function teacherList()
    {
        $data = User::where('type','teachers')->get();
        return view('teacher', compact('data'));
    }

    public function studentList()
    {
        $data = User::where('type','students')->get();
        return view('student', compact('data'));
    }
}
