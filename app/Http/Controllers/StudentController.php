<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        
        return view('student.index', compact('students'));
    }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
        Student::create([
            'nim' => $request->nim,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
        ]);
        
        return redirect()->route('student.index');
    }
    
    public function update($id) {
        $student = Student::find($id);

        return view('student.edit', compact('student'));
    }

    public function edit(Request $request, $id) {
        $student = Student::find($id);
        
        $student->update([
            'nim' => $request->nim,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
        ]);
        
        return redirect()->route('student.index');
    }

    public function delete($id) {
        $student = Student::find($id);

        $student->delete();

        return redirect()->route('student.index');
    }
}
