@extends('layouts.master')

@section('pageTitle', 'Carts Index')

@section('content')
    <h1 class="display-6">Carts</h1>
    <a href="{{route('carts.create')}}">Create New</a>
    <hr/>


    <table class="table">
        <thead>
        <th>Id_user</th>
        <th>id_prod</th>
        <th>status</th>
        <th colspan="3">Actions</th>
        </thead>

        @foreach($carts as $cart)
            <tr>
                <td>{{$cart->id_user}}</td>
                <td>{{$cart->id_prod}}</td>
                <td>{{$cart->status}}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{route('carts.show', $cart->id)}}" class="btn btn-info m-1">Details</a>
                        <a href="{{route('carts.edit', $cart->id)}}" class="btn btn-primary m-1">Edit</a>

                        <form action="{{ route('carts.destroy', $cart->id) }}" method="POST">
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