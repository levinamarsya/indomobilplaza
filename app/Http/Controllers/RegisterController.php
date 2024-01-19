<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register', [
            'cities' => City::all(),
        ]);
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
        $validated_data = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
            'confirm_password' => 'required|same:password',
            'hp' => 'required|numeric|digits_between:9,11|unique:users,hp',
            'address' => 'required',
            'city_id' => 'required'
        ],[
            'email:dns' => 'Invalid Email.',
            // 'hp.required' => 'The phone number field is required',
            'same' => 'Password Not Same.'
        ],[
            'hp' => 'phone number',
            'city_id' => 'city',
            'confirm_password' => 'confirm password'
        ]);
        $validated_data['password'] = Hash::make($request['password']);
        // dd($validated_data);
        User::create($validated_data);
        // return redirect('/')->with('success', 'Registration succeed!');
        // return response()->json(['code'=>200,'success' => true, 'message' => 'Registration succeed!']);
        // Session::flash('success', 'Registration succeed!');
        alert()->success('Success', 'Registration succeed!');
        return redirect('/');
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
