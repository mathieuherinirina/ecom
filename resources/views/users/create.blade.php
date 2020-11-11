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

    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => 'userController@store']) }}

    <!-- Include the CRSF token -->
    {{Form::token()}}

    
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('nom', 'Nom')}}
        {{Form::text('nom', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('prenom', 'Prenom')}}
        {{Form::text('prenom', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('username', 'Username')}}
        {{Form::text('username', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::text('passeword', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('role', 'Role')}}
        {{Form::text('role', '', ['class' => 'form-control'])}}
    </div>

    <!-- build the submission button -->
    {{Form::submit('Create!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}

@endsection
