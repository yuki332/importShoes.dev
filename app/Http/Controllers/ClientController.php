<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
	public function login(){
		return view('admin.login');
	}

    public function authenticate(){
    	dd(request()->all());
    	// return view('admin.index');
    }
}
