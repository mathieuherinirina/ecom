@extends('layouts.master')

@section('pageTitle', 'Carts Details')

@section('content')
    <h1 class="display-6">Cart Details</h1>

    <hr/>

    <dl>
        <dt>id_user</dt>
        <dd>{{$cart->id_user}}</dd>

        <dt>id_prod</dt>
        <dd>{{$cart->id_prod}}</dd>

        <dt>status</dt>
        <dd>{{$cart->status}}</dd>

    </dl>

    <div class="d-flex">
        <a href="{{route('carts.edit', $cart->id)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('carts.destroy', $cart->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>
@endsection