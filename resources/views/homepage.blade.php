@extends('layouts.master')

@section('pageTitle', 'Home')

@section('content')
<div>
    <div class="row">
        <div class="col-lg-4">
            <input type="text" placeholder="Chercher un nom">
        </div>
        <div class="col-lg-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Categories
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Smartphones</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Ordinateurs portable</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">tablettes</a>
            </div>
        </div>

        <div class="col-lg-4">

            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Couleurs
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Noir</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Gris</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Rouge</a>
            </div>
        </div>
    </div>

    <div class="card-container">
    
    @foreach($produits as $produit)
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" alt="Card image cap" src={{$produit->produit_img_url}}>
        <div class="card-body">
            <h5 class="card-title">{{$produit->produit_nom}}</h5>
            <p>
             Categorie: {{$produit->produit_categorie_id}}
            </p>
            <p class="card-text">
              {{$produit->produit_description}}
            </p>
            <p>
             Prix: Ar {{$produit->produit_prix}}
            </p>
            <a href="#" class="btn btn-primary">Ajouter à cart </a>
            <a href="{{route('produits.show', $produit->id)}}" class="btn btn-info m-1">Lire Details</a>
        </div>
    </div>
    @endforeach
    </div>
        

    
</div>
@endsection
