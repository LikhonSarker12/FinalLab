<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

      //  $order = Order::where('customer',$request->session()->get('name') );
        $order=Order::all();
        return view('order.list')->with('users', $order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
       $order=Order::find($id);
       return view('order.update')->with('user', $order);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=Order::find($id);
        $user->name = $request->name;
        $user->vendor = $request->vendor;
        $user->quantity = $request->quantity;
        $user->date = $request->date;
        $user->customer ='customer';

        if($user->save()){
            return redirect()->route('order.list');
        }
        else{
            return redirect()->route('order.update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('order.list');
    }
}
