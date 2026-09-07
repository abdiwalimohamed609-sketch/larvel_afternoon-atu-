<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        $student = Student::all();
        return view ('teacher.index' , ['students'=> $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
            'name'=>'required|string|max.100',
            'address'=>'required|string|max.100',
            'age'=>'required|integar|max.10',
            'phone'=>'required|string|max.100',

    ]);
    Student::create($validated);
    return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('teacher.show' , ['student'=> $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Student $student)
    {
        return view('teacher.edit' , ['student'=> $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
