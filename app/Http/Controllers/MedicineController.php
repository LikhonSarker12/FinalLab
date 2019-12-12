<?php

namespace App\Http\Controllers;

use App\medicine;
use App\Http\Requests\productRequest;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = medicine::all();
        return view('medicine.list')->with('users', $user);
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
    public function store(productRequest $request)
    {
        $product = new medicine();
        $product->name = $request->name;
        $product->vendor = $request->vendor;
        $product->type = $request->type;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price= $request->price;
        if($product->save())
        {
            return redirect()->route('medicine.list');
        }
        else{
            return redirect()->route('medicine.add');
        }
        

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(medicine $medicine)
    {
        return view('medicine.add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $product=medicine::find($id);
       return view('medicine.update')->with('user', $product);
    }
    public function postupdate(productRequest $request,$id)
    {
        $user=medicine::find($id);
        $user->name = $request->name;
        $user->vendor = $request->vendor;
        $user->type = $request->type;
        $user->category=$request->category;
        $user->quantity = $request->quantity;
        $user->price = $request->price;
        if($user->save()){
            return redirect()->route('medicine.list');
        }
        else{
            return redirect()->route('medicine.update');
        }
        


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $product=medicine::find($id);
        $product->delete();
        return redirect()->route('medicine.list');

    }
}
