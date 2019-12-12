<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Customer;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegistrationRequest;


class RegistrationController extends Controller
{
    
    function index(Request $request){
        return view('registration.index');
    }
    function getRegistrationAdmin(Request $request)
    {
        return view('registration.admin');

    }
    function getRegistrationCustomer(Request $request)
    {
       return view('registration.customer');
    }
    function postRegistrationCustomer(RegistrationRequest $request)
    {
        $user = new customer();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->Emailaddress;
        $user->contract = $request->contract;
        $user->username = $request->username;
        $user->password = $request->password;
       
        if($user->save()){
       $user = new User();
        $user->userName = $request->username;
        $user->userPassword = $request->password;
        $user->type = 'customer';
        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.customer');
        }
        }else{
            return redirect()->route('registration.customer');
        }
        
    }
    
    function postRegistrationAdmin(RegistrationRequest $request)
    {
        $user = new Admin();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->Emailaddress;
        $user->contract = $request->contract;
        $user->username = $request->username;
        $user->password = $request->password;
       
        if($user->save()){
            $user = new user();
        $user->userName = $request->username;
        $user->userPassword = $request->password;
        $user->type = 'admin';
        if($user->save()){
            return redirect()->route('login.index');
        }else{
            return redirect()->route('registration.admin');
        }
        }else{
            return redirect()->route('registration.admin');
        }
    }
}
