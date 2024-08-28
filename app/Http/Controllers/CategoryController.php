<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $categories = Category::all();
        return view('categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        $validated = Validator::validate($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image' => [
                'required',
                File::image()
                ->min('1kb')
                ->max('5mb')
            ]
            ]);
        $path;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $request->file('image')->store('images', 'public');
        }else{
            return redirect(route('categories.create'));
        }
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            "image_path" => $path,
            'user_id' => $request->user()->id,
        ]);
            
        return redirect(route('categories.create'))->with('success', 'Category created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
