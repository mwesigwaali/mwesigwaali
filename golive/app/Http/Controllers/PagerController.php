<?php

namespace App\Http\Controllers;

use App\Models\Pager;
use Illuminate\Http\Request;

class PagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $posts = Pager::all(); //fetch all blog posts from DB
	return view('index', ['posts' => $posts,
        ]); //returns the view with posts

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
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
        $newPost = Pager::create([
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        return redirect('blog/create' . $newPost->id);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pager  $pager
     * @return \Illuminate\Http\Response
     */
    public function show(Pager $pager)
    {
        return view('blog.show', [
            'post' => $pager,
        ]); //returns the view with the post
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pager  $pager
     * @return \Illuminate\Http\Response
     */
    public function edit(Pager $pager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pager  $pager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pager $pager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pager  $pager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pager $pager)
    {
        //
    }
}
