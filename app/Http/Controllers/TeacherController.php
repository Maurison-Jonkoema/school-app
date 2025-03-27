<?php

namespace App\Http\Controllers;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::with('courses')->orderBy('name')->get();
        return view('teachers.index', compact('teachers'));
    }
}
