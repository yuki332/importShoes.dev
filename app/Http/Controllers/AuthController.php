<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function store()
    {
        // $this->validate(request(), [
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'username' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|confirmed'
        // ]);

    	$user = User::create([
    		'first_name' => request('firstName'),
    		'last_name' => request('lastName'),
    		'username' => request('username'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))
    	]);

    	auth() -> login($user);
    	return redirect('/mypage');
        // dd(request()->all());
    }

    public function login()
    {
        // dd(request()->all());

        if(! auth()->attempt(request(['username', 'password']))){
            return back();
        }

        return redirect('/mypage');
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
