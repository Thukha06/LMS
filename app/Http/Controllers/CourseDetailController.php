<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Support\Facades\Auth;

class CourseDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.course-detail');
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
    public function store(Request $request)
    {
        // dd($request->all());  // Dump and die to see the submitted data
        // Validate the course_id and user_id
        $validated = $request->validate([
            'course_id' => 'required|integer',
        ]);

        // Find course by ID and get the slug
        $course = Course::findOrFail($validated['course_id']);

        // Store the enrollment request
        Enrollment::create([
            'course_id' => $validated['course_id'],
            'student_id' => Auth::guard('user')->id(),
            'status' => 0, // Pending status
        ]);

        return redirect()->route('course-detail', ['slug' => $course->slug.'#success'])
                         ->with('success', 'Enrollment request submitted. Pending approval.');
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $user = Auth::guard('user')->user(); // Logged-in user
        $course = Course::with('adminUser')->where('slug', $slug)->firstOrFail();

        // Check if the user is enrolled in the course
        $isEnrolled = $user ? $course->students()->where('student_id', $user->id)->exists() : false;
        $enrollmentStatus = $user ? $course->students()->where('student_id', $user->id)->value('status') : null;

        // Check if the user is an instructor of the course
        $isInstructor = $user ? $course->teacher_id == $user->id : false;

        $courseData = [
            'id' => $course->id,
            'title' => $course->title,
            'instructor' => $course->adminUser->name ?? 'No instructor has been assigned.',
            'date_start' => $course->date_start,
            'date_end' => $course->date_end,
            'hour_start' => $course->hour_start,
            'hour_end' => $course->hour_end,
            'avatar' => $course->avatar,
            'description' => $course->description,
            'isEnrolled' => $isEnrolled,
            'enrollmentStatus' => $enrollmentStatus,
            'isInstructor' => $isInstructor,
        ];

        return view('user.course-detail', compact('courseData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
