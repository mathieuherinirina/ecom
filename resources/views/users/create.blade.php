@extends('layouts.master')


@section('pageTitle', 'Create A user')

@section('content')
    <h1 class="display-6">Create New user</h1>

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

  <form method="post" action="/users">
    <div class="form-group">
      <label for="nom">
        Nom
      </label>
      <input type="text" name="nom" class="form-control">
    </div>

    <div class="form-group">
      <label for="prenom">
        Prenom
      </label>
      <input type="text" name="prenom" class="form-control">
    </div>

    <div class="form-group">
      <label for="username">
        Username
      </label>
      <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
      <label for="password">
        Mot de passe
      </label>
      <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
      <label for="email">
        Email
      </label>
      <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
      <label for="role">
        Role
      </label>
      <input type="role" name="role" class="form-control">
    </div>

    <!-- build the submission button -->
    <input type="submit" value="Créer">
  </form>
@endsection
