<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentInfo(){
        return view('create_student');
    }
    public function store(Request $request){

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'dob' => 'required|date',
            'gender' => 'required',
        ]);
        
        $student_info = new Student();
        $student_info->name = $request->name;
        $student_info->email = $request->email;
        $student_info->	Date_of_Birth = $request->dob;
        $student_info->gender = $request->gender;
        $student_info->save();
        return redirect()->back()->with('success', 'Student created successfully.');
    }

    public function showInfo(){
        $show_student_info = new Student();
        $students =  $show_student_info ::paginate(5);
        return view('student_table', compact('students'));
    }
}
