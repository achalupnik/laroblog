<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::where('deleted', '=', 0)->paginate(4);
        return view('admin.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_name = trim($request->input('category_name'));
        if($category_name == '') {
            return redirect()->route('categories.index')->with('error_message', 'Nie możesz dodać kategorii bez nazwy');
        }
        if(Category::where('name', '=', $category_name)->count()) {
            return redirect()->route('categories.index')->with('error_message', 'Istnieje już kategoria o takiej nazwie');
        }
        $category = new Category;
        $category->name = $request->input('category_name');
        if($category->save()) {
            return redirect()->route('categories.index')->with('success_message', 'Kategoria została zapisana');
        } else {
            return redirect()->route('categories.index')->with('error_message', 'Wystąpił błąd podczas zapisywania kategorii');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->fill($request->all());
        $category->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->delete();
            return redirect()->route('categories.index')->with('success_message', 'Kategoria zostła usunięta');
        } catch(Exception $e) {
            return redirect()->route('categories.index')->with('error_message', 'Wystąpił błąd podczas usuwania kategorii');
        }
    }
}
