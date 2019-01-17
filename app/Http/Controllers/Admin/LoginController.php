<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\ThrottlesLogins; 
use Illuminate\Foundation\Auth\AuthenticatesUsers; 

class LoginController extends Controller
{
	use AuthenticatesUsers; 

	public function __construct() 
    { 
        $this->middleware('guest:admin', ['except' => 'logout']); 
        $this->username = config('admin.global.username'); 
    } 
    
    public function login()
    {
    	return view('admin.login.login');
    }
}
