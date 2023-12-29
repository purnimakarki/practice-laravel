<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=Student::all();
        return view('backend.student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $student = Student::create($request->all());
      // dd($student);
        return redirect()->route('backend.student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $studentId)
    {
        $student=Student::find($studentId);
        return view('backend.student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $studentId)
    {
        $student= Student::find($studentId);
        return view('backend.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $studentId)
    {
        $student=Student::find($studentId);
        $student->update($request->all());
        return redirect()->route('backend.student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $studentId)
    {
        $student= Student::find($studentId);
        $student->delete();
        return redirect()->route('backend.student.index');
    }
}
