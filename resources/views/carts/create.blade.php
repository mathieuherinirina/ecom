@extends('layouts.master')

@section('pageTitle', 'Create A Cart')

@section('content')
    <h1 class="display-6">Create New Cart</h1>

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
    {{ Form::open(['action' => 'CartController@store']) }}

    <!-- Include the CRSF token -->
    {{Form::token()}}

    
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('Id_user', 'Id_user')}}
        {{Form::number('Id_user', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('Id_prod', 'Id_prod')}}
        {{Form::number('Id_prod', '', ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('status', 'status')}}
        {{Form::text('status', '', ['class' => 'form-control'])}}
    </div>

    <!-- build the submission button -->
    {{Form::submit('Create!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}

@endsection