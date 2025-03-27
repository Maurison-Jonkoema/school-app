<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    // In CourseController.php
public function index()
{
    $courses = Course::all(); // Haal alle cursussen uit de database
    return view('courses.index', compact('courses')); // Verstuur de data naar de view
}

}
