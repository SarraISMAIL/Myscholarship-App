<?php

namespace App\Http\Controllers;

use App\Http\Resources\Lookups\CategoryCollection;
use App\Models\Models\Lookups\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return CategoryCollection
     */
    public function index()
    {
        return new CategoryCollection(Category::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */


/**
    public function create()
    {
        //
    }
*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store (Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255'
        ]);

        if($validator->fails()){
            return response(['errors' => $validator->errors()], 422);
        }

        return Category::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Models\Lookups\Category  $category
     * @return Response
     */
    public function show(Category $category)
    {
        return $category;

    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Models\Lookups\Category  $category
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            //'category_id'  => 'required'
        ]);

        if($validator->fails()){
            return response(['errors' => $validator->errors()], 422);
        }

        $category->update($request->all());

        return $category;
    }


        public function test(){
        return "test good";
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Models\Lookups\Category  $category
     * @return Response
     */
    public function destroy(Category $category)
    {
        /*$category->destroy();
         return "Category is successfully delete";*/
    }
}
