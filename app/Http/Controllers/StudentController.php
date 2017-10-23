<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function getStudentData($student_no){
        return view('score',['student_no'=>$student_no,'subject'=>null]);

    }

    public function getStudentScore($student_no,$subject = null){
        return view('score',['student_no'=>$student_no,'subject'=>$subject]);

    }
}
