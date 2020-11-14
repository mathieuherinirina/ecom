@extends('layouts.master')

@section('pageTitle', 'Edit Users Details')

@section('content')

    <h1 class="display-6">Edit User</h1>

    <hr/>

    <form action="/ecom/public/users/{{$user->id}}" method="POST" >
      <input type="hidden" name="_method" value="PUT">
      <input type="hidden" name="id" value="{{ $user->id}}">
      <div class="form-group">
        <label for="nom">
          Nom
        </label>
        <input type="text" name="nom" class="form-control" value="{{$user->nom}}">
      </div>

      <div class="form-group">
        <label for="prenom">
          Prenom
        </label>
        <input type="text" name="prenom" class="form-control" value="{{$user->prenom}}">
      </div>

      <div class="form-group">
        <label for="username">
          Username
        </label>
        <input type="text" name="username" class="form-control" value="{{$user->username}}">
      </div>

      <div class="form-group">
        <label for="password">
          Mot de Passe
        </label>
        <input type="password" name="password" class="form-control" value="{{$user->password}}">
      </div>

      <div class="form-group">
        <label for="email">
            Email
        </label>
        <input type="email" name="email" class="form-control" value="{{$user->email}}">
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