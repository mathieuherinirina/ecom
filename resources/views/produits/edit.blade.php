@extends('layouts.master')

@section('pageTitle', 'Edit Users Details')

@section('content')

    <h1 class="display-6">Edit User</h1>

    <hr/>

    <form action="/ecom/public/users/{{$user->id}}" method="POST" >
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="id" value="{{ $user->id}}">
      <div class="form-group">
        <label for="produit_nom">
          Nom
        </label>
        <input type="text" name="produit_nom" class="form-control" value="{{$user->nom}}">
      </div>

      <div class="form-group">
        <label for="produit_categorie_id">
          Categorie id
        </label>
        <input type="text" name="produit_categorie_id" class="form-control" value="{{$user->prenom}}">
      </div>

      <div class="form-group">
        <label for="produit_img_url">
          Image_url
        </label>
        <input type="text" name="produit_img_url" class="form-control" value="{{$user->username}}">
      </div>

      <div class="form-group">
        <label for="produit_prix">
          Prix
        </label>
        <input type="number" name="produit_prix" class="form-control" value="{{$user->password}}">
      </div>

      <div class="form-group">
        <label for="produit_description">
            Description
        </label>
        <input type="text" name="produit_description" class="form-control" value="{{$user->email}}">
      </div>

      <div class="form-group">
        <label for="role">
          Role
        </label>
        <input type="role" name="role" class="form-control" value="{{$user->role}}">
      </div>

      @method('PUT')
      <input type="submit" value="Modifier">
    </form>
      
@endsection