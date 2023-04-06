<?php

namespace App\Http\Controllers\Course;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreCourseRequest;
use App\Http\Requests\Course\UpdateCourseRequest;
use App\Models\Course;
use App\Repositories\Category\CategoryImplement;
use App\Repositories\Course\CourseImplement;

class CourseController extends Controller
{
    protected $course;

    protected $category;

    public function __construct(CourseImplement $course, CategoryImplement $category)
    {
        $this->course = $course;
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = $this->course->getList();
        return view('course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = $this->category->getList();
        return view('course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCourseRequest $request)
    {
        $this->course->create($request->all());
        SessionHelper::alert('success', 'Successfully create data');
        return redirect('course');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('course.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $categories = $this->category->getList();
        return view('course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course = $this->course->update($course->id, $request->all());
        SessionHelper::alert('success', 'Successfully update data');
        return redirect('course');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $this->course->delete($course->id);
        SessionHelper::alert('success', 'Successfully delete data');
        return back();
    }

}
