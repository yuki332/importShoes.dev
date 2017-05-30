<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function store()
    {
    	$user = User::create([
    		'first_name' => request('firstName'),
    		'last_name' => request('lastName'),
    		'username' => request('username'),
    		'email' => request('email'),
    		'password' => bcrypt(request('password'))
    	]);

    	auth() -> login($user);
    	return redirect('/mypage');
    }

    public function destroy()
    {
    	auth()->logout();
    	return redirect()->home();
    }
}
