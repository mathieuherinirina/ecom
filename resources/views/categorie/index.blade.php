@extends('layouts.master')

@section('pageTitle', 'categories Index')

@section('content')
    <h1 class="display-6">categories</h1>
    <a href="{{route('categories.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Nom_categorie</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($categories as $categorie)
            <tr>
                <td>{{$categorie->nom_categorie}}</td>
                
                <td>
                    <div class="d-flex">
                        <a href="{{route('categories.show', $categorie->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('categories.edit', $categorie->id)}}" class="btn btn-primary m-1">Edit</a>

                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST">
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