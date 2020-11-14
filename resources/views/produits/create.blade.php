@extends('layouts.master')


@section('pageTitle', 'Create A produit')

@section('content')
    <h1 class="display-6">Create New Produit</h1>

    <hr/>

  <form action="/ecom/public/produits" method="POST" >
    <div class="form-group">
      <label for="produit_nom">
        Nom du produit
      </label>
      <input type="text" name="produit_nom" class="form-control">
    </div>

    <div class="form-group">
      <label for="produit_categorie_id">
        Categorie id
      </label>
      <input type="text" name="produit_categorie_id" class="form-control">
    </div>

    <div class="form-group">
      <label for="produit_img_url">
        Url de l'image 
      </label>
      <input type="text" name="produit_img_url" class="form-control">
    </div>

    <div class="form-group">
      <label for="produit_prix">
        Prix 
      </label>
      <input type="number" name="produit_prix" class="form-control">
    </div>

    <div class="form-group">
      <label for="produit_description">
        Description
      </label>
      <input type="text" name="produit_description" class="form-control">
    </div>

   

    <!-- build the submission button -->
    <input type="submit" value="Créer">
  </form>
@endsection
