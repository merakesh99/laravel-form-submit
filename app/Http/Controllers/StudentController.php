<?php

namespace App\Http\Controllers;

use App\Models\StudentRegister;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('student_register');
    }
    public function store(Request $request)
    {
        $student = new StudentRegister();

        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->pincode = $request->pincode;
        $student->mobileNumber = $request->mobileNumber;
        $student->password = $request->password;

        $student->save();
        return redirect('student_register')->with('status', 'Student Registered!!');
    }
}
