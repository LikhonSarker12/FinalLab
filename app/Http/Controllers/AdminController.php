<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use App\Customer;
use App\Http\Requests\updateRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Admin::where('username',$request->session()->get('name'), )
        ->first();
        return view('admin.profile')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(updateRequest $request)
    {
        $user = Admin::where('username',$request->session()->get('name'), )
        ->first();    
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
        $user->type = 'admin';
        if($user->save()){
            $request->session()->put('name', $request->input('username'));	
            return redirect()->route('admin.profile');
        }else{
            return redirect()->route('adminupdate.profile');
        }
        }else{
            return redirect()->route('adminupdate.profile');
        }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        $user = Customer::all();
        return view('admin.customerlist')->with('users', $user);
    }
    public function customerdetails(Request $request,$id)
    {
        $user = Customer::find($id);
        return view('admin.customerdetails')->with('user', $user);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $user = Admin::where('username',$request->session()->get('name'), )
        ->first();
        
       

    	return view('admin.update')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $user = Customer::find($id);
        $user->delete();
        return redirect()->route('admin.customerlist');
    }
}
