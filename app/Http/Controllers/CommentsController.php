<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
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
        $user = Auth::user();

        $validatedData = $request->validate([
            'guest_name' => 'required',
            'email' => 'required|email',
            'messaage'=>'required'
        ], [
            'guest_name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'message.required' => 'Message is required'
        ]);

        $comments = Comments::create($validatedData);
    
        return back()->with('success', 'Comments created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $postId
     * @return \Illuminate\Http\Response
     */
    public function show($postId)
    {
        // $postId = intval($postId);
        // $comments = Comments::where('post_id',$postId)->get();

        // return json
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
