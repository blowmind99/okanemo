<?php

namespace App\Http\Controllers\Enrollment;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use App\Repositories\Course\CourseImplement;
use App\Repositories\Enrollment\EnrollmentImplement;
use App\Repositories\User\UserImplement;
use Illuminate\Http\Request;


class EnrollmentController extends Controller
{
    protected $enrollment;
    protected $user;
    protected $course;

    public function __construct(EnrollmentImplement $enrollment, UserImplement $user, CourseImplement $course)
    {
        $this->enrollment = $enrollment;
        $this->user = $user;
        $this->course = $course;
    }
    /**
     * Display a listing of the resource.s
     */
    public function index()
    {
        $enrollments = $this->enrollment->getList();
        return view('enrollment.index', compact('enrollments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users      = $this->user->getList();
        $courses    = $this->course->getList();
        return view('enrollment.create', compact('users', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->enrollment->create($request->all());
        SessionHelper::alert('success', 'Successfully create data');
        return redirect('category');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Category $category)
    // {
    //     return view('category.show', compact('category'));
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Category $category)
    // {
    //     return view('category.edit', compact('category'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdateCategoryRequest $request, Category $category)
    // {
    //     $category = $this->category->update($category->id, $request->all());
    //     SessionHelper::alert('success', 'Successfully update data');
    //     return redirect('category');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->enrollment->delete($id);
        SessionHelper::alert('success', 'Successfully delete data');
        return back();
    }

}
