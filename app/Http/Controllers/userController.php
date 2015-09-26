<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Validator;
use Input;
use Redirect;
use App\user;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        $user = User::all();

        return view('user.index')
        ->with('users', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'name' => 'required',
            'email' => 'required|email',
            'password'
            );
        //Validator is checking against duplicates of emails, 
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to('user/create')
            ->withErrors($validator)
            ->withInput(Input::except('password'));
        } else {
            $password = Input::get('password');
            $hashPassword = Hash::make($password);

            $user = new User;
            $user-> name = Input::get('name');
            $user-> email = Input::get('email');
            $user-> password = $hashPassword;
            $user->save();

            Session::flash('message', 'Succesfully created user');
            return Redirect::to('user');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Show($id)
    {
        $user = User::find($id);

        return view('user.show')
            ->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Edit($id)
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
    public function Update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Destroy($id)
    {
        //
    }
}
