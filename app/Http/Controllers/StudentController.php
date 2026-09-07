<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index() {
        $name = 'Ahmed';
        return view('welcome', ['name' => $name]);
    }

    public function about() {
        $students = Student::all(); // ama Student::objects.all()

        return view('about', ['students' => $students]);
    }
}