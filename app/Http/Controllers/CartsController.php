<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = Cart::all();
        return view('carts.index', compact('carts','carts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'id_prod' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        cart::create($input);

        return redirect()->route('carts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $Cart)
    {
        $cart = Cart::findOrFail($id);
        return view('carts.show', compact('cart','cart'));
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $Cart)
    {
        $cart = Cart::findOrFail($id);
        return view('carts.show', compact('cart','cart'));
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $Cart)
    {
        $cart = Cart::findOrFail($id);

        $this->validate($request, [
            'Id_user' => 'required',
            'Id_prod' => 'required',
            'status' => 'required',
        ]);

        $input = $request->all();

        $cart->fill($input)->save();

        return redirect()->route('carts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $Cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $Cart)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();
        
        return redirect()->route('carts.index');
    }
}
