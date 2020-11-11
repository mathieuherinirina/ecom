@extends('layouts.master')

@section('pageTitle', 'Edit Carts Details')

@section('content')

    <h1 class="display-6">Edit Cart</h1>

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
    {{ Form::open(['action' => ['cartController@update', $cart->id], 'method' => 'put']) }}
    <!-- Include the CRSF token -->
    {{Form::token()}}
    <!-- build our form inputs -->
    <div class="form-group">
        {{Form::label('id_user', 'id_user')}}
        {{Form::number('id_user', $cart->id_user, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('id_prod', 'id_prod')}}
        {{Form::number('id_prod', $cart->id_prod, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('statusl', 'statusl')}}
        {{Form::text('statusl', $cart->statusl, ['class' => 'form-control'])}}
    </div>

    {{Form::submit('Update!', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}
    
@endsection