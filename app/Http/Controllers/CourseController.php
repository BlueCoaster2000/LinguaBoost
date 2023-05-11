<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\User;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', ['courses' => $courses]);
    }

    // Mostrar detalles de un curso específico
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('courses.show', ['course' => $course]);
    }

    // Inscribir al usuario en un curso
    public function store(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $user = auth()->user();
        $user->courses()->attach($course);
        $user->courses()->attach($course);
        return redirect()->back()->with('success', 'Te has inscrito en el curso exitosamente.');
    }
}
