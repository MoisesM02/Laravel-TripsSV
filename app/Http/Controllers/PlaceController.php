<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;
class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Retrieving categories to display on select
        $categories = Category::select('id', 'name')->get();

        return view("places.create", ["categories" => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        $path;
        $validated = Validator::validate($request->all(), [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required',
            'image' => [
                'required',
                File::image()
                ->min('1kb')
                ->max('5mb'),
                Rule::dimensions()->maxWidth(1350)->maxHeight(1080),
            ],
            
            ]);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $path = $request->file('image')->store('images', 'public'); 
            //Guarda la imagen dentro del directorio storage/images/
            //Para mostrar la imagen en blade se debe de utilizar la función asset() con el parámetro 'storage/' . $category->image_path
            
        }else{
            return redirect(route('places.create'));
        }
        Place::create([
            "name" => $request->name,
            "description" => $request->description,
            "image_path" => $path,
            "content" => $request->input('content'),
            "category_id" => $request->category_id,
            "user_id" => $request->user()->id,
        ]);
        return redirect(route('places.create'))->with('success', 'Place created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Place $place)
    {
        //

        return view('places.place', ['place'=>$place]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Place $place)
    {
        //Obtaining categories to display
        $categories = Category::select('id', 'name')->get();

        return view("places.create", ['place' => $place, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Place $place)
    {
        //
    }
}
