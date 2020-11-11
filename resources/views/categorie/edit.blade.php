@extends('layouts.master')

@section('pageTitle', 'Edit categories Details')

@section('content')

    <h1 class="display-6">Edit categorie</h1>

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
    {{ Form::open(['action' => ['categorieController@update', $categorie->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('nom_categorie', 'Nom Categorie')}}
        {{Form::text('nom_categorie', $categorie->nom_categorie, ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
    
@endsection