<?php

namespace App\Http\Controllers;

use Session;
use Validator;
use Input;
use Redirect;
use App\post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('post.index')
        -> with('posts', $posts);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Rules that validator will check. Required will prompt the user if the content is left empty.
        $rules = array(
            'name',
            'title' => 'required',
            'content' => 'required'
            );

        //Sets the validator to grab all of the input data from the create.blade.php view and then checks it agains the rules that were previously set.
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::to('post/create')
            ->withErrors($validator)
            ->withInput(Input::all());
        } else {
            $post = new Post;
            $post-> name = Input::get('name');
            $post-> title = Input::get('title');
            $post-> content = Input::get('content');
            $post->save();
            return Redirect::to('post');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    //Grabs the post from the database and returns it with the content listed in $post. 

    //IMPORTANT -- The route for this is /post/{id}. NOT post/show/{id}...

    {
        $post = Post::find($id);

        return view('post.show')
        ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit')
        ->with('post', $post);
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
        // Rules that validator will check. Required will prompt the user if the content is left empty.
        $rules = array(
            'name',
            'title' => 'required',
            'content' => 'required'
            );

        //Sets the validator to grab all of the input data from the create.blade.php view and then checks it agains the rules that were previously set.
        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()){
            return Redirect::to('post/{{$post->id}}}edit')
            ->withErrors($validator)
            ->withInput(Input::all());
        } else {
            $post = Post::find($id);
            $post-> name = Input::get('name');
            $post-> title = Input::get('title');
            $post-> content = Input::get('content');
            $post->save();
            return Redirect::to('post');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        return Redirect::to('post');
    }
}
