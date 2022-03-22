<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Comments;
use App\Models\Formation;
use App\Models\PostsTag;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Posts::orderBy('created_at','desc')->paginate(5);
        $popular = Posts::orderBy('count','desc')->limit(3)->get();
        $formations = Formation::orderBy('created_at','desc')->get();
        $tags = Tags::all();
        return view('posts.index',['posts'=>$posts,'tags'=>$tags,'popular'=>$popular,'formations'=>$formations]);

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
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug,Request $request)
    {
        $post = Posts::where('slug',$slug)->firstOrFail();
        $post->count = $post->count + 1;
        $post->save();
        $comments = Comments::where('post_id',$post->id)->get();
        $posttags = PostsTag::where('post_id',$post->id)->with(['tags'])->get();
        $relatedPosts = Posts::where('keywords','like',"%$post->keywords%")->limit(3)->get();
        return view('posts.show', ['post'=>$post,'comments'=>$comments,
        'posttags'=>$posttags,'relatedPosts'=>$relatedPosts]);
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
