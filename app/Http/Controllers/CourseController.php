<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Jurusan;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user()->student->id;
        
        return view('langganan', [
            'title' => 'Langganan',
            'courses' => Course::whereDoesntHave('pembelian', function ($query) use ($user) {
                $query->where('student_id', $user);
            })->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Jurusan $jurusan, Course $course)
    {
        return view('course', [
            'title' => 'Course Academy - '.$course->name,
            'jurusan' => $jurusan,
            'jurusans' => Jurusan::all(),
            'course' => $course 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
