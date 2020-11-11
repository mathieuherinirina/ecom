@extends('layouts.master')

@section('pageTitle', 'categories Details')

@section('content')
    <h1 class="display-6">categorie Details</h1>

    <hr/>

    <dl>
        <dt>Nom_categorie</dt>
        <dd>{{$categorie->nom_categorie}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('categories.edit', $categorie->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>
@endsection