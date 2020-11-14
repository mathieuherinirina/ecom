@extends('layouts.master')

@section('pageTitle', 'Users Details')

@section('content')
    <h1 class="display-6">User Details</h1>

    <hr/>

    <dl>
        <dt>Nom</dt>
        <dd>{{$user->nom}}</dd>

        <dt>Prenom</dt>
        <dd>{{$user->prenom}}</dd>

        <dt>Username</dt>
        <dd>{{$user->username}}</dd>

        
        <dt>Password</dt>
        <dd>{{$user->password}}</dd>

        <dt>Email</dt>
        <dd>{{$user->email}}</dd>

        <dt>Role</dt>
        <dd>{{$user->role}}</dd>
    </dl>

    <div class="d-flex">
        <a href="{{route('users.edit', $user)}}" class="btn btn-primary m-1">Edit</a>

        <form action="{{ route('users.destroy', $user->id) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button class="btn btn-danger m-1">Delete User</button>
        </form>
    </div>
@endsection