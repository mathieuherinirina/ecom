@extends('layouts.master')


@section('pageTitle', 'Create A produit')

@section('content')
    <h1 class="display-6">Create New Produit</h1>

    <hr/>

  <div class="section-produit-create">
  
  <form action="/ecom/public/produits" method="POST" >
    <div class="form-group">
      <label for="produit_nom">
        Nom du produit
      </label>
      <input type="text" name="produit_nom" class="form-control">
    </div>

    <div class="form-group">
      <label for="produit_categorie_id">
        <button class="nav-link dropdown-toggle" id="ddlCategorie" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </button>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          @foreach($categoriesList as $category)
            <button class="dropdown-item" data-id={{ $category->id }}>
              {{ $category->categorie_nom }}
            </button>
            <div class="dropdown-divider"></div>
          @endforeach

      </div>
  
      </label>
      <input type="text" name="produit_categorie_id" class="form-control txtCategory">
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

  </div>
@endsection
