<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('user.login');
    }

    public function sso()
    {
    	if(cas()->isAuthenticated()){
    		return redirect('/');
    	}else{
        	cas()->authenticate();
        }
    }

}
