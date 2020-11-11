@extends('layouts.master')

@section('pageTitle', 'Produits Index')

@section('content')
    <h1 class="display-6">Produits</h1>
    <a href="{{route('produits.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Nom_produits</th>
        <th>Id_categorie</th>
        <th>img_url</th>
        <th>prix</th>
        <th>Description</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($produits as $produit)
            <tr>
                <td>{{$produit->nom_produit}}</td>
                <td>{{$produit->id_categorie}}</td>
                <td>{{$produit->img_url}}</td>
                <td>{{$produit->prix}}</td>
                <td>{{$produit->description}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('produits.show', $produit->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('produits.edit', $produit->id)}}" class="btn btn-primary m-1">Edit</a>

                        <form action="{{ route('produits.destroy', $produit->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button class="btn btn-danger m-1">Delete User</button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
    </table>

@endsection