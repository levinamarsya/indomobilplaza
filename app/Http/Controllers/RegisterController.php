<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:dns|unique:users,email',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
            'confirm_password' => 'required|same:password',
            'hp' => 'required|numeric|digits_between:9,13|unique:users,hp',
            'address' => 'required',
            'city_id' => 'required'
        ],[
            'email' => 'Invalid Email.',
            'same' => 'Password Not Same.',
            'required' => 'Form must be filled'
        ],[
            'hp' => 'phone number',
            'city_id' => 'city',
            'confirm_password' => 'confirm password'
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator->errors()->first())->withInput();
        }
        $validated_data = $validator->validated();
        $validated_data['password'] = Hash::make($request['password']);
        User::create($validated_data);
        
        alert()->success('Success', 'Registration success!');
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
