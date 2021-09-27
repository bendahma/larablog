<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Category;
use App\Models\CodeSnippet;

class frontendController extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }

    public function post(Post $post){

        $prevPost = Post::where('created_at', '<', $post->created_at )->orderBy('created_at')->first();
        $nextPost = Post::where('created_at', '>', $post->created_at )->orderBy('created_at')->first();

        return view('post')
                        ->with('prevPost',$prevPost)
                        ->with('nextPost',$nextPost)
                        ->with('post',$post) ;
    }

    public function categoryPosts(Category $category)
    {
        $posts = Post::whereHas('category',function ($query) use($category){
            $query->where('id', $category->id);
        })->paginate(9);
        
        return view('categoryPosts')    
                ->with('category',$category)
                ->with('posts',$posts);
    }

    public function codesnippets(){
        return view('codesnippets')->with('snippets',CodeSnippet::paginate(12));
    }

    public function about()
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
        //
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
