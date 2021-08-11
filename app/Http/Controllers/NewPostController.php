<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class NewPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.new-post', compact('categories'));
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
        $request->validate([
            'title' => 'required|max:300',
            'category' => 'required|numeric',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif'
        ]);
        $post = new Post;
        $post->author = Auth::user()->id;
        $post->fill($request->all());
        if($request->input('type') == 2 && $request->hasFile('image')) {
            $path = $request->image->path();
            $extension = $request->image->extension();
            $file_path = $request->image->store('image/'.Auth::user()->id);
            $post->file_path = $file_path;
        }
        if($post->save()) {
            return redirect()->route('new_post.index')->with('success_message', 'Post został dodany');
        } else {
            return redirect()->route('new_post.index')->with('error_message', 'Wystąpił błąd podczas zapisywania danych');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
