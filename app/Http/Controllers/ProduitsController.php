<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits','produits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produits.create');

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
            'nom_prod' => 'required',
            'id_categorie' => 'required',
            'img_url' => 'required',
            'prix' => 'required|numeric',
            'description' => 'required',
        ]);

        $input = $request->all();

        produit::create($input);

        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $Produit)
    {
        $produit = Produit::findOrFail($id);
        return view('produits.show', compact('produit','produit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $Produit)
    {
        $produit = Produit::find($id);
        
        return view('produits.edit', compact('produit','produit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produit $Produit)
    {
        $produit = Produit::findOrFail($id);

        $this->validate($request, [
            'nom_prod' => 'required',
            'id_categorie' => 'required',
            'img_url' => 'required',
            'prix' => 'required|numeric',
            'description' => 'required',
        ]);

        $input = $request->all();

        $produit->fill($input)->save();

        return redirect()->route('produits.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produit  $Produit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produit $Produit)
    {
        $produit = Produit::findOrFail($id);

        $produit->delete();
        
        return redirect()->route('produits.index');
    }
}
