@extends('layouts.master')

@section('pageTitle', 'Edit Users Details')

@section('content')

    <h1 class="display-6">Edit User</h1>

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

    <form action="/users" method="put">
    
    </form>
    <!-- Open the form with the store function route. -->
    {{ Form::open(['action' => ['UserController@update', $user->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('nom', 'Nom')}}
        {{Form::text('nom', $user->nom, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('prenom', 'Prenom')}}
        {{Form::text('prenom', $user->prenom, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('username', 'Username')}}
        {{Form::number('username', $user->username, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('password', 'Password')}}
        {{Form::text('password', $user->password, ['class' => 'form-control'])}}
    </div>


    <div class="form-group">
        {{Form::label('email', 'E-Mail Address')}}
        {{Form::text('email', $user->email, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('role', 'Role')}}
        {{Form::text('role', $user->role, ['class' => 'form-control'])}}
    </div>


    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
    
@endsection