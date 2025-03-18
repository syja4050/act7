<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $students = Student::all();
        return view ('student.index', compact('students'));
    }
}
