<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    function index()
    {
        return view('login.index');
    }
    public function verify(Request $req){

		

		$user = user::where('username', $req->username)
					->where('userPassword', $req->password)
					->first();
				
    /*
		$user = DB::table('users')->where('username', $req->username)
					->where('password', $req->password)
					->get();*/					

		if($user != null ){
	
			$req->session()->put('name', $req->input('username'));			
			$req->session()->put('user', $user);
			return redirect()->route('home.index');
		}else{

			$req->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect('/login');
		}
	}
}
