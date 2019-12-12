<?php

namespace App\Http\Controllers;

use App\Customer;
use App\User;
use App\medicine;
use App\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Customer::where('username',$request->session()->get('name'), )
        ->first();
        return view('customer.profile')->with('user', $user);
    }

    public function customerupdate(Request $request)
    {
        $user = Customer::where('username',$request->session()->get('name'), )
        ->first();
        return view('customer.update')->with('user', $user);
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
        $user = customer::where('username',$request->session()->get('name'), )
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
        $user->type = 'customer';
        if($user->save()){
            $request->session()->put('name', $request->input('username'));	
            return redirect()->route('customer.profile');
        }else{
            return redirect()->route('customer.updateprofile');
        }
        }else{
            return redirect()->route('customer.updateprofile');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        $product=medicine::all();
        return view('customer.medicine')->with('users', $product);

    }
    public function order (Request $request,$id)
    {
        $product=medicine::find($id);
        return view('customer.order')->with('user', $product);

    }
    public function orderInsert (Request $request,$id)
    {
        $product = new Order();
        $product->name = $request->name;
        $product->vendor = $request->vendor;
        $product->quantity = $request->customerquantity;
        $product->date= $request->delivery;
        $product->customer= $request->session()->get('name');


        if($product->save())
        {
            return redirect()->route('order.list');
        }
        else{
            return redirect()->route('customer.order');
        }
        

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $user = Customer::where('username',$request->session()->get('name'), )
        ->first();
        return view('customer.update')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
