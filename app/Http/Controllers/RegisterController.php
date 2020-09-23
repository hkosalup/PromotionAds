<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.register');
//        $users = users::paginate(5);
//        return view('auth.register',compact('users'));
//        $user = users::all();
//        return view('auth.register');
    }

    public function dashboard()
    {
        return view('Backend.Dashboard.dashboard1');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required',
            'lname' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required'
        ]);
        $user = new users([
            //        dd($user);
            'first_name' => $request->get('fname'),
            'last_name' => $request->get('lname'),
            'username' => $request->get('username'),
            'email' => $request->get('email'),
            'password' =>Hash::make('password'),
            'password_confirmation' =>Hash::make('password_confirmation')
        ]);
        $user->save();
        return redirect()->route('dashboard');
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