<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

$categories = Category::all();

        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//dd(request()->all());


        $this->validate($request, [
            'title' => 'required',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required'
        ]);


   


    $featured = $request->featured;
    $featured_new_name = time().$featured->getClientOriginalName();
    $featured->move('uploads/posts', $featured_new_name);



 /*$post = new Post;
    $post->title = $request->title;
    $post->content = $request->content;
    $post->featured = 'uploads/posts/' . $featured_new_name;
    $post->category_id = $request->category_id;
    $post->save();

    return redirect()->back();
*/

    $post = Post::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured' => 'uploads/posts/' .$featured_new_name,
        'category_id' => $request->category_id
    ]);


//Session::flash('success', 'Post created successfully');

return redirect()->back();

//dd(request()->all());




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
