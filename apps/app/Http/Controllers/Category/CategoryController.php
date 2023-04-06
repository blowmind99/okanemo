<?php

namespace App\Http\Controllers\Category;

use App\Helpers\SessionHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Models\Category;
use App\Repositories\Category\CategoryImplement;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CategoryImplement $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = $this->category->getList();
        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $this->category->create($request->all());
        SessionHelper::alert('success', 'Successfully create data');
        return redirect('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category = $this->category->update($category->id, $request->all());
        SessionHelper::alert('success', 'Successfully update data');
        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $this->category->delete($category->id);
        SessionHelper::alert('success', 'Successfully delete data');
        return back();
    }

}
