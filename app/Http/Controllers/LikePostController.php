<?php

namespace App\Http\Controllers;

use App\Models\Likepost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikePostController extends Controller
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
        if (!Auth::user()) {
            notify()->error('veillez vous connectez avant d\'ajouter un like à un post');
        }else{


            // ['column_1', '=', 'value_1']
            $isLiked = Likepost::where([['user_id', '=', Auth::user()->id], ['post_id', '=', $request->post_id]])->first();
            
            // dd(isset($isLiked));
            if (isset($isLiked)) {
                notify()->error('vous avez déjà aimé cet article');
            }else{
                $like = Likepost::create(['user_id'=>Auth::user()->id,'post_id'=>$request->post_id]);
                notify()->success('vous avez aimé cet article');
            }
        }
        return back();
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
