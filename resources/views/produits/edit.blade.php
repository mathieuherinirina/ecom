@extends('layouts.master')

@section('pageTitle', 'Edit Produits Details')

@section('content')

    <h1 class="display-6">Edit Produit</h1>

    <hr/>
    <!-- if validation in the controller fails, show the errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => ['produitController@update', $produit->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('nom_produit', 'Nom_produit')}}
        {{Form::text('nom_produit', $produit->nom_produit, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('categorie_id', 'Categorie_id')}}
        {{Form::number('categorie_id', $produit->categorie_id, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('img_url', 'Img_url')}}
        {{Form::text('img_url', $produit->img_url, ['class' => 'form-control'])}}
    </div>


    <div class="form-group">
        {{Form::label('prix', 'Prix')}}
        {{Form::number('prix', $produit->prix, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::text('description', $produit->description, ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
    
@endsection