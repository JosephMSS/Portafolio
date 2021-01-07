<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category as CategoryRequest;
// use Illuminate\Http\Request as CategoryRequest;
class CategoryController extends Controller
{
    protected $category;
    public function __construct(Category  $category)
    {
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category::latest()->get();
        // dd($categories);
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\CategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $this->category::create([
            'name' => $request->name
        ]);
        return back()->with('status', 'Successfully created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\CategoryRequest  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update([
            'name' => $request->name
        ]);
        return back()->with('status','Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
